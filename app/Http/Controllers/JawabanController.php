<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Http\Requests\StoreJawabanRequest;
use App\Http\Requests\UpdateJawabanRequest;
use App\Mail\SendEmail;
use App\Models\Bakat;
use App\Models\Pertanyaan;
use App\Models\Sesi;
use Illuminate\Support\Facades\Mail;

class JawabanController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Sesi $sesi)
    {
        $pertanyaan = Pertanyaan::where('versi_id', $sesi->versi_id)->get()->map(function ($pertanyaan) use ($sesi) {
            $jawaban = $sesi->jawaban->where('pertanyaan_id', $pertanyaan->id)->map(function ($jawaban) {
                return $jawaban->option_id;
            });
            return [
                'question' => $pertanyaan->question,
                'options' => $pertanyaan->option->filter(function ($option) use ($jawaban) {
                    return $jawaban->contains($option->id);
                })->map(function ($option) {
                    return [
                        'option' => $option->answer,
                    ];
                }),
            ];
        });
        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'jawaban']),
            'data' => $pertanyaan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJawabanRequest $request)
    {
        $validated = $request->validated();
        $data = [];
        foreach ($validated['answer']['option'] as $option) {
            $data[] = Jawaban::create([
                'sesi_id' => $validated['session'],
                'pertanyaan_id' => $validated['answer']['question'],
                'option_id' => $option,
            ]);
        }
        $groupedData = collect($data)->groupBy('pertanyaan_id')->map(function ($jawaban, $key) {
            return [
                'session_id' => $jawaban->first()->sesi_id,
                'answers' => [
                    'question_id' => $key,
                    'option_ids' => $jawaban->map(function ($jawaban) {
                        return $jawaban->option_id;
                    }),
                ]
            ];
        })->values();
        return response()->json([
            'status' => 'success',
            'message' => __('create_data', ['data' => 'jawaban']),
            'data' => $groupedData,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJawabanRequest $request)
    {
        $validated = $request->validated();
        $jawaban = Jawaban::where('sesi_id', $validated['session'])->where('pertanyaan_id', $validated['answer']['question'])->get();
        if ($jawaban->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => __('no_data', ['data' => 'jawaban']),
            ], 404);
        }
        $data = [];
        foreach ($validated['answer']['option'] as $index => $option) {
            if (isset($jawaban[$index])) {
                $jawaban[$index]->update([
                    'option_id' => $option,
                ]);
                $data[] = $jawaban[$index];
            }
        }
        $groupedData = collect($data)->groupBy('pertanyaan_id')->map(function ($jawaban, $key) {
            return [
                'session_id' => $jawaban->first()->sesi_id,
                'answers' => [
                    'question_id' => $key,
                    'option_ids' => $jawaban->map(function ($jawaban) {
                        return $jawaban->option_id;
                    }),
                ]
            ];
        })->values();
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'jawaban']),
            'data' => $groupedData,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function save(Sesi $sesi)
    {
        $totalPertanyaan = Pertanyaan::where('versi_id', $sesi->versi_id)->count();
        $totalJawaban = $sesi->jawaban->groupBy('pertanyaan_id')->count();

        if ($totalJawaban != $totalPertanyaan) {
            return response()->json([
                'status' => 'error',
                'message' => __('error_save_answer')
            ]);
        }

        if ($sesi->status !== 'Active') {
            return response()->json([
                'status' => 'error',
                'message' => __('completed_sesi')
            ]);
        }

        // Validasi peserta sebelum lanjut
        $user = $sesi->peserta;
        $calculateBakat = $this->calculateBakat($sesi);
        $sesi->status = 'Survei';

        foreach ($calculateBakat as $bakat) {
            $sesi->bakat()->attach($bakat['bakat_id'], ['total' => $bakat['total']]);
        }

        $sesi->save();

        return $this->sendReport($sesi);
    }

    public function calculateBakat(Sesi $sesi)
    {
        $bakat = Bakat::all()->map(function ($bakat) use ($sesi) {
            $total = $sesi->jawaban->filter(function ($jawaban) use ($bakat) {
                return $jawaban->option->bakat_id == $bakat->id;
            })->count();
            return [
                'bakat_id' => $bakat->id,
                'total' => $total,
            ];
        })->sortByDesc('total')->values();

        return $bakat;
    }

    public function sendReport(Sesi $sesi)
    {
        $user = $sesi->peserta;

        $data = [
            'name' => $user->name,
            'survey_link' => env('LANDING_URL') . '/survei/' . $sesi->id,
            'report_link' => env('LANDING_URL') . '/hasil-quiz/' . $sesi->id,
        ];

        try {
            Mail::to($user->email)->send(new SendEmail($data));
            return response()->json([
                'status' => 'success',
                'message' => __('save_answer'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}

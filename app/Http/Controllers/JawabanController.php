<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Http\Requests\StoreJawabanRequest;
use App\Http\Requests\UpdateJawabanRequest;
use App\Models\Pertanyaan;
use App\Models\Sesi;

class JawabanController extends Controller
{
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

        if ($totalJawaban == $totalPertanyaan && $sesi->status === 'Active') {
            $calculateBakat = $this->calculateBakat($sesi);
            $sesi->status = 'Completed';
            foreach ($calculateBakat as $bakat) {
                $sesi->bakat()->attach($bakat['bakat_id'], ['total' => $bakat['total']]);
            }
            $sesi->save();
        } else if ($totalJawaban != $totalPertanyaan) {
            return response()->json([
                'status' => 'error',
                'message' => __('error_save_answer')
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => __('duplicate_save_answer')
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => __('save_answer'),
            'data' => $sesi
        ]);
    }

    public function calculateBakat(Sesi $sesi)
    {
        $sesi->load('jawaban.option.bakat');

        $bakatTotals = $sesi->jawaban
            ->map(function ($jawaban) {
                return $jawaban->option->bakat->id ?? null;
            })
            ->filter()
            ->countBy()
            ->map(function ($total, $bakatId) {
                return [
                    'bakat_id' => $bakatId,
                    'total' => $total,
                ];
            })
            ->sortByDesc('total')
            ->take(5)
            ->values();

        return $bakatTotals;
    }
}

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
     * Display the specified resource.
     */
    public function show(Sesi $sesi)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'jawaban']),
            'data' => [
                'session_id' => $sesi->id,
                'peserta_id' => $sesi->peserta_id,
                'answers' => $sesi->jawaban->groupBy('pertanyaan_id')->map(function ($jawaban, $key) {
                    return [
                        'question_id' => $key,
                        'option_ids' => $jawaban->map(function ($jawaban) {
                            return $jawaban->option_id;
                        }),
                    ];
                })->values(),
                'last_answer' => $sesi->jawaban->sortByDesc('created_at')->first()->pertanyaan_id ?? null,
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJawabanRequest $request, Sesi $sesi, Pertanyaan $pertanyaan)
    {
        $validated = $request->validated();
        Jawaban::where('sesi_id', $sesi->id)
            ->where('pertanyaan_id', $pertanyaan->id)
            ->delete();
        $data = [];
        foreach ($validated['option'] as $option) {
            $data[] = Jawaban::create([
                'sesi_id' => $sesi->id,
                'pertanyaan_id' => $pertanyaan->id,
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
            'message' => __('update_data', ['data' => 'jawaban']),
            'data' => $groupedData,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jawaban $jawaban)
    {
        //
    }
}

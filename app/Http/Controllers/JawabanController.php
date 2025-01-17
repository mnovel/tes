<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Http\Requests\StoreJawabanRequest;
use App\Http\Requests\UpdateJawabanRequest;
use App\Models\Pertanyaan;
use App\Models\Sesi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
    public function show(Sesi $sesi, Request $request)
    {
        $validated = $request->validate([
            'question' => [
                'nullable',
                Rule::exists('jawabans', 'pertanyaan_id')->where(function ($query) use ($sesi) {
                    return $query->where('sesi_id', $sesi->id);
                }),
            ]
        ]);

        if (isset($validated['question'])) {
            $jawaban = $sesi->jawaban->where('pertanyaan_id', $validated['question']);
            if ($jawaban->isEmpty()) {
                return response()->json([
                    'status' => 'error',
                    'message' => __('no_data', ['data' => 'jawaban']),
                ], 404);
            }
            return response()->json([
                'status' => 'success',
                'message' => __('display_data', ['data' => 'jawaban']),
                'data' => [
                    'answers' => $jawaban->groupBy('pertanyaan_id')->map(function ($jawaban, $key) {
                        return [
                            'question_id' => $key,
                            'option_ids' => $jawaban->map(function ($jawaban) {
                                return $jawaban->option_id;
                            }),
                        ];
                    })->values(),
                ]
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'jawaban']),
            'data' => [
                'answers' => $sesi->jawaban->groupBy('pertanyaan_id')->map(function ($jawaban, $key) {
                    return [
                        'question_id' => $key,
                        'option_ids' => $jawaban->map(function ($jawaban) {
                            return $jawaban->option_id;
                        }),
                    ];
                })->values(),
                'last_answer' => [
                    'question_id' => $sesi->jawaban->last()->pertanyaan_id,
                ],
            ]
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
}

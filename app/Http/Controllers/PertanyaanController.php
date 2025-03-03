<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Http\Requests\StorePertanyaanRequest;
use App\Http\Requests\UpdatePertanyaanRequest;
use App\Models\Jawaban;
use App\Models\Option;
use App\Models\Sesi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['indexQuiz']]);
    }

    /**
     * Display index quiz
     */

    public function indexQuiz(Request $request, Sesi $sesi)
    {
        $validated = $request->validate([
            'type' => 'required|in:Single,Multiple',
        ]);

        $versi = $sesi->versi_id;

        $pertanyaanQuery = Pertanyaan::with(['versi', 'option'])->where('versi_id', $versi);

        if (!empty($validated['type'])) {
            $pertanyaanQuery->where('type', $validated['type']);
        }

        $pertanyaan = $pertanyaanQuery->paginate(1);

        $formattedPertanyaan = $pertanyaan->getCollection()->map(function ($pertanyaan) use ($sesi) {
            return [
                'id' => $pertanyaan->id,
                'versi' => $pertanyaan->versi->name,
                'type' => $pertanyaan->type,
                'question' => $pertanyaan->question,
                'options' => $pertanyaan->option->map(function ($option) {
                    return [
                        'id' => $option->id,
                        'answer' => $option->answer,
                    ];
                }),
                'answers' => Jawaban::with('option')->where('pertanyaan_id', $pertanyaan->id)->where('sesi_id', $sesi->id)->get()->map(function ($answer) {
                    return [
                        'option_id' => $answer->option_id,
                        'answer' => $answer->option->answer
                    ];
                })
            ];
        });

        return response()->json([
            'status' => 'success',
            'data' => $formattedPertanyaan,
            'pagination' => [
                'current_page' => $pertanyaan->currentPage(),
                'last_page' => $pertanyaan->lastPage(),
                'per_page' => $pertanyaan->perPage(),
                'total' => $pertanyaan->total(),
            ],
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'type' => 'nullable|in:Single,Multiple',
            'versi' => 'nullable|exists:versi_pertanyaans,id',
        ]);

        $query = Pertanyaan::orderBy('type');

        if (isset($validated['type'])) {
            $query->where('type', $validated['type']);
        }

        if (isset($validated['versi'])) {
            $query->where('versi_id', $validated['versi']);
        }

        $pertanyaan = $query->get()->map(function ($pertanyaan) {
            return [
                'id' => $pertanyaan->id,
                'versi' => $pertanyaan->versi->name,
                'type' => $pertanyaan->type,
                'question' => $pertanyaan->question,
                'options' => $pertanyaan->option->map(function ($option) {
                    return [
                        'id' => $option->id,
                        'answer' => $option->answer,
                        'bakat_id' => $option->bakat->id ?? null,
                        'bakat' => $option->bakat->name ?? null
                    ];
                }),
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'pertanyaan']),
            'data' => $pertanyaan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePertanyaanRequest $request)
    {
        $validated = $request->validated();
        try {
            DB::beginTransaction();

            $pertanyaan = Pertanyaan::create([
                'versi_id' => $validated['versi'],
                'type' => $validated['type'],
                'question' => $validated['question'],
            ]);

            foreach ($validated['options'] as $option) {
                Option::create([
                    'pertanyaan_id' => $pertanyaan->id,
                    'answer' => $option['answer'],
                    'bakat_id' => $option['bakat'] ?? null,
                ]);
            }

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => __('create_data', ['data' => 'pertanyaan']),
                'data' => $pertanyaan->load('option')
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => __('error_create', ['data' => 'pertanyaan']),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pertanyaan $pertanyaan)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'pertanyaan']),
            'data' => [
                'id' => $pertanyaan->id,
                'versi' => $pertanyaan->versi->name,
                'type' => $pertanyaan->type,
                'question' => $pertanyaan->question,
                'options' => $pertanyaan->option->map(function ($option) {
                    return [
                        'id' => $option->id,
                        'answer' => $option->answer,
                        'bakat_id' => $option->bakat->id ?? null,
                        'bakat' => $option->bakat->name ?? null
                    ];
                }),
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePertanyaanRequest $request, Pertanyaan $pertanyaan)
    {
        $validated = $request->validated();
        try {
            DB::beginTransaction();

            $pertanyaan->update([
                'versi_id' => $validated['versi'],
                'type' => $validated['type'],
                'question' => $validated['question'],
            ]);

            $pertanyaan->option()->delete();

            foreach ($validated['options'] as $option) {
                Option::create([
                    'pertanyaan_id' => $pertanyaan->id,
                    'answer' => $option['answer'],
                    'bakat_id' => $option['bakat'] ?? null,
                ]);
            }

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => __('update_data', ['data' => 'pertanyaan']),
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json([
                    'status' => 'error',
                    'message' => __('error_update_relation', ['data' => 'pertanyaan']),
                ], 400);
            }

            return response()->json([
                'status' => 'error',
                'message' => __('error_update', ['data' => 'pertanyaan']),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        try {
            $pertanyaan->delete();
            return response()->json([
                'status' => 'success',
                'message' => __('delete_data', ['data' => 'pertanyaan']),
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json([
                    'status' => 'error',
                    'message' => __('error_delete_relation', ['data' => 'pertanyaan']),
                ], 400);
            }

            return response()->json([
                'status' => 'error',
                'message' => __('error_delete', ['data' => 'pertanyaan']),
            ], 500);
        }
    }
}

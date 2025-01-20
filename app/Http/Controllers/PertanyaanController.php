<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Http\Requests\StorePertanyaanRequest;
use App\Http\Requests\UpdatePertanyaanRequest;
use App\Models\Option;
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
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
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
                    $data = [
                        'id' => $option->id,
                        'answer' => $option->answer,

                    ];

                    if (Auth::check()) {
                        $data['bakat_id'] = $option->bakat->id ?? null;
                        $data['bakat'] = $option->bakat->name ?? null;
                    }

                    return $data;
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
                    $data = [
                        'id' => $option->id,
                        'answer' => $option->answer,
                    ];

                    if (Auth::check()) {
                        $data['bakat_id'] = $option->bakat->id ?? null;
                        $data['bakat'] = $option->bakat->name ?? null;
                    }

                    return $data;
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
                'data' => $pertanyaan->load('option')
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => __('error_update', ['data' => 'pertanyaan']),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        $pertanyaan->delete();
        return response()->json([
            'status' => 'success',
            'message' => __('delete_data', ['data' => 'Pertanyaan']),
        ]);
    }
}

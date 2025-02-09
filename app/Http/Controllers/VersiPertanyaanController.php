<?php

namespace App\Http\Controllers;

use App\Models\VersiPertanyaan;
use App\Http\Requests\StoreVersiPertanyaanRequest;
use App\Http\Requests\UpdateVersiPertanyaanRequest;

class VersiPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $versiPertanyaan = VersiPertanyaan::all();

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'versi pertanyaan']),
            'data' => $versiPertanyaan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVersiPertanyaanRequest $request)
    {
        $validated = $request->validated();
        if ($validated['status'] === 'Active') {
            VersiPertanyaan::where('status', 'Active')->update(['status' => 'Inactive']);
        }
        $versiPertanyaan = VersiPertanyaan::create($validated);
        return response()->json([
            'status' => 'success',
            'message' => __('create_data', ['data' => 'versi pertanyaan']),
            'data' => $versiPertanyaan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(VersiPertanyaan $versiPertanyaan)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'versi pertanyaan']),
            'data' => $versiPertanyaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVersiPertanyaanRequest $request, VersiPertanyaan $versiPertanyaan)
    {
        $validated = $request->validated();
        if ($validated['status'] === 'Active') {
            VersiPertanyaan::where('status', 'Active')->where('id', '!=', $versiPertanyaan->id)->update(['status' => 'Inactive']);
        }
        $versiPertanyaan->update($validated);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'versi pertanyaan']),
            'data' => $versiPertanyaan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VersiPertanyaan $versiPertanyaan)
    {
        if ($versiPertanyaan->status == 'Active') {
            return response()->json([
                'status' => 'error',
                'message' => 'Tidak bisa menghapus versi pertanyaan aktif',
            ]);
        } else {
            try {
                $versiPertanyaan->delete();
                return response()->json([
                    'status' => 'success',
                    'message' => __('delete_data', ['data' => 'versi pertanyaan']),
                ]);
            } catch (\Illuminate\Database\QueryException $e) {
                if ($e->getCode() == 23000) {
                    return response()->json([
                        'status' => 'error',
                        'message' => __('error_delete_relation', ['data' => 'versi pertanyaan']),
                    ], 400);
                }

                return response()->json([
                    'status' => 'error',
                    'message' => __('error_delete', ['data' => 'versi pertanyaan']),
                ], 500);
            }
        }
    }
}

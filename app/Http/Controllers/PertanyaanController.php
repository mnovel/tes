<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Http\Requests\StorePertanyaanRequest;
use App\Http\Requests\UpdatePertanyaanRequest;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'type' => 'nullable|in:SINGLE,MULTIPLE',
        ]);

        $query = Pertanyaan::query();
        if (isset($validated['type'])) {
            $query->where('type', $validated['type']);
        }
        $pertanyaans = $query->get();
        return response()->json([
            'status' => 'success',
            'message' => '',
            'data' => $pertanyaans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePertanyaanRequest $request)
    {
        $validated = $request->validated();
        if (isset($validated['options']) && is_array($validated['options'])) {
            foreach ($validated['options'] as &$option) {
                $option['id'] = (string) \Illuminate\Support\Str::uuid();
            }
        }
        $pertanyaan = Pertanyaan::create($validated);
        return response()->json([
            'status' => 'success',
            'message' => '',
            'data' => $pertanyaan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePertanyaanRequest $request, Pertanyaan $pertanyaan)
    {
        //
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

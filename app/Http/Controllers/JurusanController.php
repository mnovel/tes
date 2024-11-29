<?php

namespace App\Http\Controllers;

use App\Models\Bakat;
use App\Models\Jurusan;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $validated = $request->validate([
            'bakat' => 'nullable|exists:bakats,id'
        ]);

        $query = Jurusan::query();

        if (!empty($validated['bakat'])) {
            $query->whereJsonContains('bakat_id', $validated['bakat']);
        }

        $jurusan = $query->get()->map(fn($jurusan) => [
            'id' => $jurusan->id,
            'name' => $jurusan->name,
            'bakat' => Bakat::whereIn('id', $jurusan->bakat_id)->pluck('name')->toArray()
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $jurusan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJurusanRequest $request)
    {
        $validated = $request->validated();
        $jurusan = Jurusan::create([
            'name' => $validated['name'],
            'bakat_id' => $validated['bakat']
        ]);
        return response()->json([
            'status' => 'successs',
            'message' => '',
            'data' => $jurusan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        return response()->json([
            'status' => 'success',
            'message' => '',
            'data' => [
                'id' => $jurusan->id,
                'name' => $jurusan->name,
                'bakat' =>  $jurusan->bakat()
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJurusanRequest $request, Jurusan $jurusan)
    {
        $validated = $request->validated();
        $jurusan->update($validated);
        return response()->json([
            'status' => 'success',
            'message' => '',
            'data' => $jurusan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();
        return response()->json([
            'status' => 'success',
            'message' => '',
        ]);
    }
}

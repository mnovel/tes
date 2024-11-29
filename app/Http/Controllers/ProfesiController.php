<?php

namespace App\Http\Controllers;

use App\Models\Profesi;
use App\Http\Requests\StoreProfesiRequest;
use App\Http\Requests\UpdateProfesiRequest;
use App\Models\Bakat;
use Illuminate\Http\Request;

class ProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'bakat' => 'nullable|exists:bakats,id'
        ]);

        $query = Profesi::query();

        if (!empty($validated['bakat'])) {
            $query->whereJsonContains('bakat_id', $validated['bakat']);
        }

        $profesi = $query->get()->map(fn($profesi) => [
            'id' => $profesi->id,
            'name' => $profesi->name,
            'bakat' => Bakat::whereIn('id', $profesi->bakat_id)->pluck('name')->toArray()
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $profesi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesiRequest $request)
    {
        $validated = $request->validated();
        $profesi = Profesi::create([
            'name' => $validated['name'],
            'bakat_id' => $validated['bakat']
        ]);
        return response()->json([
            'status' => 'successs',
            'message' => '',
            'data' => $profesi
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesi $profesi)
    {
        return response()->json([
            'status' => 'success',
            'message' => '',
            'data' => [
                'id' => $profesi->id,
                'name' => $profesi->name,
                'bakat' =>  $profesi->bakat()
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesiRequest $request, Profesi $profesi)
    {
        $validated = $request->validated();
        $profesi->update($validated);
        return response()->json([
            'status' => 'success',
            'message' => '',
            'data' => $profesi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesi $profesi)
    {
        $profesi->delete();
        return response()->json([
            'status' => 'success',
            'message' => '',
        ]);
    }
}

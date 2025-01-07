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

        $query = Profesi::with('bakat');

        if (!empty($validated['bakat'])) {
            $query->whereHas('bakat', function ($query) use ($validated) {
                $query->where('bakats.id', $validated['bakat']);
            });
        }

        $profesi = $query->get()->map(fn($profesi) => [
            'id' => $profesi->id,
            'name' => $profesi->name,
            'bakat' => $profesi->bakat->map(function ($bakat) {
                return [
                    'id' => $bakat->id,
                    'name' => $bakat->name,
                ];
            })
        ]);

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'Profesi']),
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
        ]);
        $profesi->bakat()->attach($validated['bakat']);
        return response()->json([
            'status' => 'successs',
            'message' => __('create_data', ['data' => 'Profesi']),
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
            'message' => __('detail_data', ['data' => 'Profesi']),
            'data' => [
                'id' => $profesi->id,
                'name' => $profesi->name,
                'bakat' => $profesi->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                    ];
                })
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesiRequest $request, Profesi $profesi)
    {
        $validated = $request->validated();
        $profesi->name = $validated['name'];
        $profesi->save();
        $profesi->bakat()->sync($validated['bakat']);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'Profesi']),
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
            'message' => __('delete_data', ['data' => 'Profesi']),
        ]);
    }
}

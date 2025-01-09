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

        $query = Jurusan::with('bakat');

        if (!empty($validated['bakat'])) {
            $query->whereHas('bakat', function ($query) use ($validated) {
                $query->where('bakats.id', $validated['bakat']);
            });
        }

        $jurusan = $query->get()->map(function ($jurusan) {
            return [
                'id' => $jurusan->id,
                'name' => $jurusan->name,
                'bakat' => $jurusan->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                    ];
                })
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'Jurusan']),
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
        ]);
        $jurusan->bakat()->attach($validated['bakat']);
        return response()->json([
            'status' => 'successs',
            'message' => __('create_data', ['data' => 'Jurusan']),
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
            'message' => __('detail_data', ['data' => 'Jurusan']),
            'data' => [
                'id' => $jurusan->id,
                'name' => $jurusan->name,
                'bakat' => $jurusan->bakat->map(function ($bakat) {
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
    public function update(UpdateJurusanRequest $request, Jurusan $jurusan)
    {
        $validated = $request->validated();
        $jurusan->name = $validated['name'];
        $jurusan->save();
        $jurusan->bakat()->sync($validated['bakat']);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'Jurusan']),
            'data' => $jurusan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        try {
            $jurusan->delete();
            return response()->json([
                'status' => 'success',
                'message' => __('delete_data', ['data' => 'Jurusan']),
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json([
                    'status' => 'error',
                    'message' => __('error_delete_relation', ['data' => 'jurusan']),
                ], 400);
            }

            return response()->json([
                'status' => 'error',
                'message' => __('error_delete', ['data' => 'jurusan']),
            ], 500);
        }
    }
}

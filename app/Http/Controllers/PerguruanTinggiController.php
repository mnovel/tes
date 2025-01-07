<?php

namespace App\Http\Controllers;

use App\Models\PerguruanTinggi;
use App\Http\Requests\StorePerguruanTinggiRequest;
use App\Http\Requests\UpdatePerguruanTinggiRequest;
use App\Models\Jurusan;

class PerguruanTinggiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $perguruanTinggi = PerguruanTinggi::with('jurusan')->get()->map(function ($perguruanTinggi) {
            return [
                'id' => $perguruanTinggi->id,
                'name' => $perguruanTinggi->name,
                'rank' => $perguruanTinggi->rank,
                'jurusan' => $perguruanTinggi->jurusan->map(function ($jurusan) {
                    return [
                        'id' => $jurusan->id,
                        'name' => $jurusan->name
                    ];
                })
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'Perguruan Tinggi']),
            'data' => $perguruanTinggi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerguruanTinggiRequest $request)
    {
        $validated = $request->validated();
        $perguruanTinggi = PerguruanTinggi::create([
            'name' =>  $validated['name'],
            'rank' =>  $validated['rank'],
        ]);
        $perguruanTinggi->jurusan()->attach($validated['jurusan']);
        return response()->json([
            'status' => 'successs',
            'message' => __('create_data', ['data' => 'Perguruan Tinggi']),
            'data' => $perguruanTinggi
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PerguruanTinggi $perguruanTinggi)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'Perguruan Tinggi']),
            'data' => [
                'id' => $perguruanTinggi->id,
                'name' => $perguruanTinggi->name,
                'rank' => $perguruanTinggi->rank,
                'jurusan' => $perguruanTinggi->jurusan->map(function ($jurusan) {
                    return [
                        'id' => $jurusan->id,
                        'name' => $jurusan->name
                    ];
                })
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerguruanTinggiRequest $request, PerguruanTinggi $perguruanTinggi)
    {
        $validated = $request->validated();
        $perguruanTinggi->update([
            'name' =>  $validated['name'],
            'rank' =>  $validated['rank'],
        ]);
        $perguruanTinggi->jurusan()->sync($validated['jurusan']);
        return response()->json([
            'status' => 'successs',
            'message' => __('update_data', ['data' => 'Perguruan Tinggi']),
            'data' => $perguruanTinggi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerguruanTinggi $perguruanTinggi)
    {
        $perguruanTinggi->delete();
        return response()->json([
            'status' => 'success',
            'message' =>  __('delete_data', ['data' => 'Perguruan Tinggi']),
        ]);
    }
}

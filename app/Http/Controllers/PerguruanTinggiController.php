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

        $perguruanTinggi = PerguruanTinggi::get()->map(fn($perguruanTinggi) => [
            'id' => $perguruanTinggi->id,
            'name' => $perguruanTinggi->name,
            'rank' => $perguruanTinggi->rank,
            'jurusan' => Jurusan::whereIn('id', $perguruanTinggi->jurusan_id)->pluck('name')->toArray()
        ]);

        return response()->json([
            'status' => 'success',
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
            'jurusan_id' =>  $validated['jurusan'],
        ]);
        return response()->json([
            'status' => 'successs',
            'message' => '',
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
            'message' => '',
            'data' => [
                'id' => $perguruanTinggi->id,
                'name' => $perguruanTinggi->name,
                'rank' => $perguruanTinggi->rank,
                'bakat' =>  $perguruanTinggi->jurusan(),
                'status' => $perguruanTinggi->status,
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
            'jurusan_id' =>  $validated['jurusan'],
        ]);
        return response()->json([
            'status' => 'successs',
            'message' => '',
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
            'message' => '',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Http\Requests\StoreSekolahRequest;
use App\Http\Requests\UpdateSekolahRequest;

class SekolahController extends Controller
{
    /**
     * Create a new SekolahControllers instance.
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
    public function index()
    {
        $sekolah = Sekolah::orderBy('name')->get();
        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'sekolah']),
            'data' => $sekolah,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSekolahRequest $request)
    {
        $validated = $request->validated();

        $sekolah = Sekolah::create([
            'name' => $validated['name'],
            'level' => $validated['level'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => __('create_data', ['data' => 'sekolah']),
            'data' => $sekolah
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'sekolah']),
            'data' => [
                'id' => $sekolah->id,
                'name' => $sekolah->name,
                'level' => $sekolah->level,
            ]
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSekolahRequest $request, Sekolah $sekolah)
    {
        $validated = $request->validated();

        $sekolah->update([
            'name' => $validated['name'],
            'level' => $validated['level'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'sekolah']),
            'data' => $sekolah
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete();

        return response()->json([
            'status' => 'success',
            'message' => __('delete_data', ['data' => 'sekolah']),
        ], 200);
    }
}

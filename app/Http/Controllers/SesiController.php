<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use App\Http\Requests\StoreSesiRequest;
use App\Http\Requests\UpdateSesiRequest;

class SesiController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['show', 'store', 'update']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sesi = Sesi::all();

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'sesi']),
            'data' => $sesi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSesiRequest $request)
    {
        $validated = $request->validated();
        $sesi = Sesi::create([
            'peserta_id' => $validated['peserta'],
            'status' => $validated['status']
        ]);
        return response()->json([
            'status' => 'success',
            'message' => __('create_data', ['data' => 'sesi']),
            'data' => $sesi
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesi $sesi)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('show_data', ['data' => 'sesi']),
            'data' => $sesi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSesiRequest $request, Sesi $sesi)
    {
        $validated = $request->validated();
        $sesi->update([
            'bakat_id' => $validated['bakat'],
            'status' => $validated['status']
        ]);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'sesi']),
            'data' => $sesi
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesi $sesi)
    {
        $sesi->delete();
        return response()->json([
            'status' => 'success',
            'message' => __('delete_data', ['data' => 'sesi']),
            'data' => $sesi
        ]);
    }
}

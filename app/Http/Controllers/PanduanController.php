<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use App\Http\Requests\StorePanduanRequest;
use App\Http\Requests\UpdatePanduanRequest;

class PanduanController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $panduan = Panduan::select('deskripsi')->first();
        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'panduan']),
            'data' => $panduan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePanduanRequest $request)
    {
        $validated = $request->validated();
        $panduan = Panduan::first();
        $panduan->update($validated);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'panduan']),
            'data' => $panduan,
        ]);
    }
}

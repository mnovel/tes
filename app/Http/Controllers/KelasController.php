<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Http\Requests\UpdateKelasRequest;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Create a new KelasController instance.
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
    public function index(Request $request)
    {

        $validated = $request->validate([
            'level' => 'nullable|in:SD,SMP,SMA',
            'status' => 'nullable|in:Active,Inactive'
        ]);

        $query = Kelas::query();

        if (!empty($validated['level'])) {
            $query->where('level',  $validated['level']);
        }

        if (!empty($validated['status'])) {
            $query->where('status',  $validated['status']);
        }

        $kelas = $query->get();

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'kelas']),
            'data' => $kelas,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        $validated = $request->validated();
        $kelas->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'kelas']),
        ], 200);
    }
}

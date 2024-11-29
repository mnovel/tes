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
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $validated = $request->validate([
            'level' => 'nullable|in:SD,SMP,SMA'
        ]);

        $query = Kelas::select(['id', 'name', 'level', 'status']);


        if (!empty($validated['level'])) {
            $query->where('level',  $validated['level']);
        }

        $kelas = $query->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Here is the list of all available classes!',
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
            'message' => 'Fantastic! The class status has been successfully updated.',
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use App\Http\Requests\StoreSesiRequest;
use App\Http\Requests\UpdateSesiRequest;
use App\Models\VersiPertanyaan;

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
            'data' => $sesi->map(function ($sesi) {
                return [
                    'id' => $sesi->id,
                    'peserta' => [
                        'id' => $sesi->peserta->id,
                        'name' => $sesi->peserta->name,
                        'kelas' => $sesi->peserta->kelas->name,
                        'jenjang' => $sesi->peserta->sekolah->level,
                        'sekolah' => $sesi->peserta->sekolah->name,
                    ],
                    'versi' => [
                        'id' => $sesi->versi->id,
                        'name' => $sesi->versi->name,
                    ],
                    'status' => $sesi->status,
                    'created_at' => $sesi->created_at,
                    'updated_at' => $sesi->updated_at,
                ];
            })
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSesiRequest $request)
    {
        $validated = $request->validated();
        $activeVersi = VersiPertanyaan::where('status', 'Active')->first()->id;
        $sesi = Sesi::create([
            'peserta_id' => $validated['peserta'],
            'versi_id' => $activeVersi,
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
            'data' => [
                'id' => $sesi->id,
                'peserta' => [
                    'id' => $sesi->peserta->id,
                    'name' => $sesi->peserta->name,
                    'kelas' => $sesi->peserta->kelas->name,
                    'jenjang' => $sesi->peserta->sekolah->level,
                    'sekolah' => $sesi->peserta->sekolah->name,
                ],
                'versi' => [
                    'id' => $sesi->versi->id,
                    'name' => $sesi->versi->name,
                ],
                'status' => $sesi->status,
                'bakat' => $sesi->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'nama' => $bakat->nama,
                    ];
                }),
                'created_at' => $sesi->created_at,
                'updated_at' => $sesi->updated_at,
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSesiRequest $request, Sesi $sesi)
    {
        $validated = $request->validated();
        $sesi->update([

            'status' => $validated['status']
        ]);
        $sesi->bakat()->attach($validated['bakat']);
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

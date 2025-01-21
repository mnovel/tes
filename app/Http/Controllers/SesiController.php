<?php

namespace App\Http\Controllers;

use App\Models\Sesi;

class SesiController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['show']]);
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
                    'participant' => [
                        'id' => $sesi->peserta->id,
                        'name' => $sesi->peserta->name,
                        'class' => $sesi->peserta->kelas->name,
                        'level' => $sesi->peserta->sekolah->level,
                        'school' => $sesi->peserta->sekolah->name,
                    ],
                    'version' => [
                        'id' => $sesi->versi->id,
                        'name' => $sesi->versi->name,
                    ],
                    'talent' => $sesi->bakat->map(function ($bakat) {
                        return [
                            'id' => $bakat->id,
                            'name' => $bakat->name,
                            'score' => $bakat->pivot->total
                        ];
                    }),
                    'status' => $sesi->status,
                    'created_at' => $sesi->created_at,
                    'updated_at' => $sesi->updated_at,
                ];
            })
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
                'participant' => [
                    'id' => $sesi->peserta->id,
                    'name' => $sesi->peserta->name,
                    'class' => $sesi->peserta->kelas->name,
                    'level' => $sesi->peserta->sekolah->level,
                    'school' => $sesi->peserta->sekolah->name,
                ],
                'version' => [
                    'id' => $sesi->versi->id,
                    'name' => $sesi->versi->name,
                ],
                'status' => $sesi->status,
                'talent' => $sesi->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                        'score' => $bakat->pivot->total
                    ];
                }),
                'created_at' => $sesi->created_at,
                'updated_at' => $sesi->updated_at,
            ]
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
        ]);
    }
}

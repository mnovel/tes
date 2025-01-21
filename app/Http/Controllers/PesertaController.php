<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Http\Requests\StorePesertaRequest;
use App\Http\Requests\UpdatePesertaRequest;
use App\Models\VersiPertanyaan;

class PesertaController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['show', 'store']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::all();

        return response()->json([
            'status' => 'success',
            'message' => __('display_data', ['data' => 'Peserta']),
            'data' => $peserta->map(function ($peserta) {
                return [
                    'id' => $peserta->id,
                    'name' => $peserta->name,
                    'email' => $peserta->email,
                    'school' => $peserta->sekolah->name,
                    'class' => $peserta->kelas->name,
                    'dream_university' => $peserta->perguruanTinggi->name ?? null,
                    'dream_major' => $peserta->jurusan->name ?? null,
                    'sessions' => $peserta->sesi->map(function ($sesi) {
                        return [
                            'id' => $sesi->id,
                            'status' => $sesi->status,
                            'talents' => $sesi->bakat->map(function ($bakat) {
                                return [
                                    'id' => $bakat->id,
                                    'name' => $bakat->name,
                                ];
                            })
                        ];
                    })
                ];
            })
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePesertaRequest $request)
    {
        $validated = $request->validated();
        $peserta = Peserta::firstOrCreate([
            'email' => $validated['email'],
        ], [
            'name' => $validated['name'],
            'sekolah_id' => $validated['school'],
            'kelas_id' => $validated['class'],
            'perguruan_tinggi_id' => $validated['university'] ?? null,
            'jurusan_id' => $validated['major'] ?? null,
        ]);

        if (!$peserta->sesi()->where('status', 'Active')->exists()) {
            $peserta->sesi()->create([
                'versi_id' => VersiPertanyaan::where('status', 'Active')->first()->id,
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => __('create_data', ['data' => 'Peserta']),
            'data' =>  [
                'id' => $peserta->id,
                'name' => $peserta->name,
                'email' => $peserta->email,
                'school' => $peserta->sekolah->name,
                'class' => $peserta->kelas->name,
                'dream_university' => $peserta->perguruanTinggi->name ?? null,
                'dream_major' => $peserta->jurusan->name ?? null,
                'sessions' => $peserta->sesi->map(function ($sesi) {
                    return [
                        'id' => $sesi->id,
                        'status' => $sesi->status,
                    ];
                })
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'Peserta']),
            'data' => [
                'id' => $peserta->id,
                'name' => $peserta->name,
                'email' => $peserta->email,
                'school' => $peserta->sekolah->name,
                'class' => $peserta->kelas->name,
                'dream_university' => $peserta->perguruanTinggi->name ?? null,
                'dream_major' => $peserta->jurusan->name ?? null,
                'sessions' => $peserta->sesi->map(function ($sesi) {
                    return [
                        'id' => $sesi->id,
                        'status' => $sesi->status,
                    ];
                })
            ]
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePesertaRequest $request, Peserta $peserta)
    {
        $validated = $request->validated();
        $peserta->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'sekolah_id' => $validated['school'],
            'kelas_id' => $validated['class'],
            'perguruan_tinggi_id' => $validated['university'] ?? null,
            'jurusan_id' => $validated['major'] ?? null,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => __('update_data', ['data' => 'Peserta']),
            'data' => [
                'id' => $peserta->id,
                'name' => $peserta->name,
                'email' => $peserta->email,
                'sc' => $peserta->sekolah->name,
                'kelas' => $peserta->kelas->name,
                'perguruan_tinggi_impian' => $peserta->perguruanTinggi->name ?? null,
                'jurusan_impian' => $peserta->jurusan->name ?? null,
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();
        return response()->json([
            'status' => 'success',
            'message' => __('delete_data', ['data' => 'Peserta']),
        ]);
    }
}

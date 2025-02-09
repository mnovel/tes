<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function reportQuiz(Sesi $sesi)
    {
        if ($sesi->status !== 'Survei') {
            return response()->json([
                'status' => 'error',
                'message' => 'Sesi masih berlangsung atau belum selesai',
            ], 400);
        }


        // dd($sesi->bakat->sortByDesc('pivot.total')->take(3)->pluck('profesi')->flatten()->unique('id')->values());

        return response()->json([
            'status' => 'success',
            'message' => __('detail_data', ['data' => 'hasil quiz']),
            'data' => [
                'id' => $sesi->id,
                'participant' => [
                    'id' => $sesi->peserta->id,
                    'name' => $sesi->peserta->name,
                    'class' => $sesi->peserta->kelas->name,
                    'level' => $sesi->peserta->sekolah->level,
                    'school' => $sesi->peserta->sekolah->name,
                ],
                'talent' => $sesi->bakat->map(function ($bakat) {
                    return [
                        'id' => $bakat->id,
                        'name' => $bakat->name,
                        'score' => $bakat->pivot->total,
                        'short_description' => $bakat->short_description,
                        'full_description' => $bakat->full_description,
                        'recommendation' => $bakat->recommendation,
                    ];
                }),
                'profession' => $sesi->bakat->sortByDesc('pivot.total')->take(3)->pluck('profesi')->flatten()->groupBy('id')->filter(function ($profesi) {
                    return $profesi->count() === 3;
                })->values()->map(function ($profesi) {
                    return [
                        'id' => $profesi->first()->id,
                        'name' => $profesi->first()->name,
                    ];
                }),
                'major' => $sesi->bakat->sortByDesc('pivot.total')->take(3)->pluck('jurusan')->flatten()->groupBy('id')->filter(function ($jurusan) {
                    return $jurusan->count() === 3;
                })->values()->map(function ($jurusan) {
                    return [
                        'id' => $jurusan->first()->id,
                        'name' => $jurusan->first()->name,
                        'universities' => $jurusan->first()->perguruanTinggi->pluck('name'),
                    ];
                }),
                'created_at' => $sesi->created_at,
            ]
        ]);
    }
}

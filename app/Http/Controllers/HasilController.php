<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function reportQuiz(Sesi $sesi)
    {
        if ($sesi->status !== 'Completed') {
            return response()->json([
                'status' => 'error',
                'message' => 'Sesi masih berlangsung atau belum selesai',
                'data' => [
                    'current_status' => $sesi->status
                ],
            ], 400);
        }

        $thresholds = [3, 2, 1];

        $getMatchedItems = function ($relation) use ($sesi, $thresholds) {
            foreach ($thresholds as $threshold) {
                $items = $sesi->bakat
                    ->sortByDesc('pivot.total')
                    ->take(3)
                    ->pluck($relation)
                    ->flatten()
                    ->groupBy('id')
                    ->filter(fn($item) => $item->count() >= $threshold)
                    ->values()
                    ->map(fn($item) => [
                        'id' => $item->first()->id,
                        'name' => $item->first()->name,
                        'match_count' => $item->count(),
                    ]);

                if ($items->count() >= 5) {
                    return $items->sortByDesc('match_count')->values();
                }
            }

            return $items->sortByDesc('match_count')->values();
        };

        $professions = $getMatchedItems('profesi')->take(5)->map(function ($profession) {
            return [
                'name' => $profession['name'],
                'match_count' => $profession['match_count'],
            ];
        });

        $majors = $getMatchedItems('jurusan')->take(5)->map(function ($major) {
            return [
                'name' => $major['name'],
                'universities' => \App\Models\Jurusan::find($major['id'])->perguruanTinggi->pluck('name')
            ];
        });

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
                'talent' => $sesi->bakat->map(fn($bakat) => [
                    'id' => $bakat->id,
                    'name' => $bakat->name,
                    'score' => $bakat->pivot->total,
                    'short_description' => $bakat->short_description,
                    'full_description' => $bakat->full_description,
                    'recommendation' => $bakat->recommendation,
                    'icon' => asset($bakat->icon)
                ]),
                'profession' => $professions,
                'major' => $majors,
                'created_at' => $sesi->created_at,
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Survei;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $survei = [
            [
                'question' => 'Apakah web ini membantumu dalam menemukan potensi dirimu?',
                'type' => 'Scale',
                'status' => 'active'
            ],
            [
                'question' => 'Apakah hasil tes telah memberimu inspirasi dalam penentuan jurusan yang akan kamu pilih?',
                'type' => 'Scale',
                'status' => 'active'
            ],
            [
                'question' => 'Apakah kamu tertarik untuk mempromosikan website ini pada orang di sekitarmu?',
                'type' => 'Scale',
                'status' => 'active'
            ],
            [
                'question' => 'Berikan kritik dan saran anda untuk pengembangan website ini!',
                'type' => 'Text',
                'status' => 'active'
            ]
        ];

        foreach ($survei as $s) {
            Survei::create($s);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Panduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $panduan = [
            'description' => '<ol>\n  <li>Tes ini bukan sekedar kuis biasa – ini adalah penilaian untuk <strong>memahami kecerdasanmu</strong></li>\n  <li>Tujuan tes ini adalah untuk membantumu dalam menemukan potensi terbaik dalam dirimu</li>\n  <li>Hasil dari tes ini tidak menentukan tingkat kecerdasan, tetapi tipe kecerdasan yang kamu miliki</li>\n  <li>Tidak ada batas waktu, cukup kerjakan secara jujur dengan memilih jawaban yang paling sesuai denganmu</li>\n  <li>Soal akan terdiri dari 2 sesi, perbedaannya hanya dalam pemilihan jawaban. Sesi 1 kamu hanya dapat memilih 1 jawaban diantara “setuju”/”tidak setuju”. Sedangkan sesi 2 kamu dapat memilih 3 jawaban yang paling sesuai dengan dirimu</li>\n</ol>',
        ];
        Panduan::create($panduan);
    }
}

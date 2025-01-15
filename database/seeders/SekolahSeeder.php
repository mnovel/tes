<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sekolah = [
            [
                'name' => 'SMK Negeri 1 Surabaya',
                'level' => 'SMA',
            ],
            [
                'name' => 'SMK Negeri 2 Surabaya',
                'level' => 'SMA',
            ],
            [
                'name' => 'SMK Negeri 3 Surabaya',
                'level' => 'SMA',
            ],
        ];

        foreach ($sekolah as $resSekolah) {
            Sekolah::create($resSekolah);
        }
    }
}

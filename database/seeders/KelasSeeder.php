<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            [
                'name' => 'Kelas 7',
                'level' => 'SMP',
                'status' => 'active'
            ],
            [
                'name' => 'Kelas 8',
                'level' => 'SMP',
                'status' => 'active'
            ],
            [
                'name' => 'Kelas 9',
                'level' => 'SMP',
                'status' => 'active'
            ],
            [
                'name' => 'Kelas 10',
                'level' => 'SMA',
                'status' => 'active'
            ],
            [
                'name' => 'Kelas 11',
                'level' => 'SMA',
                'status' => 'active'
            ],
            [
                'name' => 'Kelas 12',
                'level' => 'SMA',
                'status' => 'active'
            ],
        ];

        foreach ($kelas as $resKelas) {
            Kelas::create($resKelas);
        }
    }
}

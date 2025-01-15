<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\PerguruanTinggi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerguruanTinggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perguruanTinggi = [
            [
                'name' => 'Universitas Gadjah Mada',
                'rank' => 1,
                'jurusan' => ['Pendidikan Seni Musik', 'Seni Pertunjukan'],
                'status' => 'Active',
            ],
            [
                'name' => 'Institut Seni Indonesia Yogyakarta',
                'rank' => 2,
                'jurusan' => ['Penciptaan Musik', 'Etnomusikologi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Negeri Yogyakarta',
                'rank' => 3,
                'jurusan' => ['Pendidikan Seni Musik', 'Seni Pertunjukan'],
                'status' => 'Active',
            ]
        ];


        foreach ($perguruanTinggi as $resPerguruanTinggi) {
            $perguruanTinggi = PerguruanTinggi::create([
                'name' =>  $resPerguruanTinggi['name'],
                'rank' =>  $resPerguruanTinggi['rank'],
                'status' => $resPerguruanTinggi['status']
            ]);

            $jurusanIds = Jurusan::whereIn('name', $resPerguruanTinggi['jurusan'])->pluck('id');
            $perguruanTinggi->jurusan()->attach($jurusanIds);
        }
    }
}

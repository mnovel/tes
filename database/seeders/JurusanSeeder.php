<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\Bakat;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = [
            [
                'name' => 'Pendidikan Seni Musik',
                'bakat' => ['Linguistik', 'Musikal']
            ],
            [
                'name' => 'Seni Pertunjukan',
                'bakat' => ['Musikal', 'Linguistik']
            ],
            [
                'name' => 'Penciptaan Musik',
                'bakat' => ['Musikal', 'Linguistik']
            ],
            [
                'name' => 'Etnomusikologi',
                'bakat' => ['Musikal', 'Linguistik']
            ],
        ];

        foreach ($jurusans as $resJurusan) {
            $jurusan = Jurusan::create([
                'name' => $resJurusan['name'],
            ]);

            $bakatIds = Bakat::whereIn('name', $resJurusan['bakat'])->pluck('id');
            $jurusan->bakat()->attach($bakatIds);
        }
    }
}

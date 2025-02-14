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
        $csvPath = database_path('seeders/data/Profesi.csv');

        if (!file_exists($csvPath) || !is_readable($csvPath)) {
            throw new \Exception("File CSV tidak ditemukan atau tidak bisa dibaca: $csvPath");
        }

        $file = fopen($csvPath, 'r');
        $header = fgetcsv($file);

        while (($row = fgetcsv($file)) !== false) {
            $data = array_combine($header, $row);

            $jurusan = Jurusan::create([
                'name' => trim($data['name'])
            ]);

            $bakatNames = array_map('trim', explode(',', $data['bakat']));
            $bakatIds = Bakat::whereIn('name', $bakatNames)->pluck('id')->toArray();

            $jurusan->bakat()->attach($bakatIds);
        }

        fclose($file);
    }
}

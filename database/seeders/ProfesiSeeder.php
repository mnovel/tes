<?php

namespace Database\Seeders;

use App\Models\Bakat;
use App\Models\Profesi;
use Illuminate\Database\Seeder;

class ProfesiSeeder extends Seeder
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

            $profesi = Profesi::create([
                'name' => trim($data['name'])
            ]);

            $bakatNames = array_map('trim', explode(',', $data['bakat']));
            $bakatIds = Bakat::whereIn('name', $bakatNames)->pluck('id')->toArray();

            $profesi->bakat()->attach($bakatIds);
        }

        fclose($file);
    }
}

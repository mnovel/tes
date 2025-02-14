<?php

namespace Database\Seeders;

use App\Models\Bakat;
use Illuminate\Database\Seeder;

class BakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvPath = database_path('seeders/data/bakat.csv');

        if (!file_exists($csvPath) || !is_readable($csvPath)) {
            throw new \Exception("File CSV tidak ditemukan atau tidak bisa dibaca: $csvPath");
        }

        $file = fopen($csvPath, 'r');
        $header = fgetcsv($file);

        while (($row = fgetcsv($file)) !== false) {
            $data = array_combine($header, $row);
            Bakat::create([
                'name' => trim($data['bakat']),
                'short_description' => trim($data['deskripsi_singkat']),
                'full_description' => trim($data['deskripsi_lengkap']),
                'recommendation' => trim($data['rekomendasi']),
                'icon' => null
            ]);
        }

        fclose($file);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\PerguruanTinggi;
use Illuminate\Database\Seeder;

class PerguruanTinggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvPath = database_path('seeders/data/PT.csv');

        if (!file_exists($csvPath) || !is_readable($csvPath)) {
            throw new \Exception("File CSV tidak ditemukan atau tidak bisa dibaca: $csvPath");
        }

        $file = fopen($csvPath, 'r');
        $header = fgetcsv($file);

        while (($row = fgetcsv($file)) !== false) {
            $data = array_combine($header, $row);

            $perguruanTinggi = PerguruanTinggi::create([
                'name' => trim($data['name']),
                'status' => trim($data['status'] ?? 'Active'),
            ]);

            $jurusanNames = array_map('trim', explode(',', $data['jurusan']));
            $jurusanIds = Jurusan::whereIn('name', $jurusanNames)->pluck('id');

            $perguruanTinggi->jurusan()->attach($jurusanIds);
        }

        fclose($file);
    }
}

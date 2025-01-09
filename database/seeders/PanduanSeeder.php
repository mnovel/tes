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
            'description' => 'Panduan ini berisi tentang cara menggunakan aplikasi ini',
        ];
        Panduan::create($panduan);
    }
}

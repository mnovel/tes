<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'title' => 'Tes Minat Bakat',
            'description' => 'Voluptate qui ipsum velit occaecat qui fugiat aliqua id nulla eiusmod nisi incididunt reprehenderit.',
            'author' => 'Muhammad Novel',
            'keywords' => 'tes,minat bakat,kuliah',
            'icon' => '',
            'contact' => [
                'email' => 'agus@gmail.com',
                'phone' => '+6281234567890',
                'address' => 'Jl. Lorem Ipsum Dolor Sit Amet',
            ]
        ]);
    }
}

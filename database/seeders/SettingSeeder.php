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
            'title' => 'Career The Explorer',
            'description' => 'Voluptate qui ipsum velit occaecat qui fugiat aliqua id nulla eiusmod nisi incididunt reprehenderit.',
            'author' => 'CTE Team',
            'keywords' => 'tes,minat bakat,kuliah',
            'icon' => 'images/icon.png',
            'contact' => [
                'email' => 'helpdesk@careertheexplorer.com',
                'phone' => '+6287865790888',
                'address' => 'Jl. Ketintang Madya II no. 42, Surabaya',
            ]
        ]);
    }
}

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
            'description' => 'Career The Explorer adalah platform yang membantu individu menemukan minat dan bakat mereka serta memberikan panduan untuk memilih jurusan kuliah yang tepat.',
            'author' => 'CTE Team',
            'keywords' => 'career, explorer, platform, minat, bakat, jurusan kuliah, panduan',
            'icon' => 'images/icon.png',
            'favicon' => 'images/favicon.png',
            'contact' => [
                'email' => 'helpdesk@careertheexplorer.com',
                'phone' => '+6287865790888',
                'address' => 'Jl. Ketintang Madya II no. 42, Surabaya',
            ],
            'seo' => [
                'google_analytics' => '',
                'bing_webmaster' => ''
            ]
        ]);
    }
}

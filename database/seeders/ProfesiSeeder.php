<?php

namespace Database\Seeders;

use App\Models\Bakat;
use App\Models\Profesi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesi = [
            [
                'name' => 'Guru/Dosen',
                'bakat' => ['Interpersonal', 'Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Jurnalis/Wartawan',
                'bakat' => ['Linguistik', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Copy Writer',
                'bakat' => ['Linguistik', 'Interpersonal', 'Visual Spasial']
            ],
            [
                'name' => 'Podcaster',
                'bakat' => ['Linguistik', 'Interpersonal', 'Musikal']
            ],
            [
                'name' => 'Sekretaris',
                'bakat' => ['Linguistik', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Translator',
                'bakat' => ['Linguistik', 'Intrapersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Sutradara',
                'bakat' => ['Visual Spasial', 'Interpersonal', 'Linguistik']
            ],
            [
                'name' => 'Influencer',
                'bakat' => ['Interpersonal', 'Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'Diplomat',
                'bakat' => ['Interpersonal', 'Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Dokter',
                'bakat' => ['Logis Matematis', 'Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Aktuaris',
                'bakat' => ['Logis Matematis', 'Intrapersonal', 'Visual Spasial']
            ],
            [
                'name' => 'Analis Keuangan',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'Robotik dan AI Specialist',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Game Developer',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Manajer',
                'bakat' => ['Logis Matematis', 'Interpersonal', 'Linguistik']
            ],
            [
                'name' => 'Programmer',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Data Analyst',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Linguistik']
            ],
            [
                'name' => 'Pengusaha',
                'bakat' => ['Logis Matematis', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Apoteker',
                'bakat' => ['Logis Matematis', 'Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Desainer',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Arkeolog',
                'bakat' => ['Visual Spasial', 'Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Fotografer',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Logis Matematis']
            ],
            [
                'name' => 'Insinyur',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Perencana Wilayah Kota',
                'bakat' => ['Visual Spasial', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Ilustrator',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Arsitek',
                'bakat' => ['Visual Spasial', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Seniman',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Kartografer',
                'bakat' => ['Visual Spasial', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Psikolog',
                'bakat' => ['Interpersonal', 'Intrapersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Perawat',
                'bakat' => ['Interpersonal', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Public relation',
                'bakat' => ['Interpersonal', 'Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'Konsultan',
                'bakat' => ['Interpersonal', 'Logis Matematis', 'Linguistik']
            ],
            [
                'name' => 'Mentor',
                'bakat' => ['Interpersonal', 'Intrapersonal', 'Linguistik']
            ],
            [
                'name' => 'Politisi',
                'bakat' => ['Linguistik', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Pekerja Layanan Pelanggan',
                'bakat' => ['Interpersonal', 'Linguistik', 'Kinestetik']
            ],
            [
                'name' => 'HRD',
                'bakat' => ['Interpersonal', 'Intrapersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Penulis',
                'bakat' => ['Linguistik', 'Intrapersonal', 'Interpersonal']
            ],
            [
                'name' => 'Sosiolog',
                'bakat' => ['Interpersonal', 'Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Konselor',
                'bakat' => ['Interpersonal', 'Intrapersonal', 'Linguistik']
            ],
            [
                'name' => 'Guru Agama',
                'bakat' => ['Intrapersonal', 'Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Antropolog',
                'bakat' => ['Linguistik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Atlet',
                'bakat' => ['Kinestetik', 'Intrapersonal', 'Visual Spasial']
            ],
            [
                'name' => 'Koreografer',
                'bakat' => ['Kinestetik', 'Visual Spasial', 'Musikal']
            ],
            [
                'name' => 'Guru Olahraga',
                'bakat' => ['Kinestetik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Aktor',
                'bakat' => ['Kinestetik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Koki',
                'bakat' => ['Kinestetik', 'Visual Spasial', 'Logis Matematis']
            ],
            [
                'name' => 'Tour Guide',
                'bakat' => ['Interpersonal', 'Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'MUA',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Fisioterapis',
                'bakat' => ['Kinestetik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Dokter Hewan',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Interpersonal']
            ],
            [
                'name' => 'Agronomis (Ahli Pertanian)',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Ahli Teknologi Lingkungan',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Kinestetik']
            ],
            [
                'name' => 'Pengelola Peternakan',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Ahli Pengelolaan SDA',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Visual Spasial']
            ],
            [
                'name' => 'Pengelola Ekowisata',
                'bakat' => ['Naturalis', 'Interpersonal', 'Visual Spasial']
            ],
            [
                'name' => 'Musisi',
                'bakat' => ['Musikal', 'Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Komposer Lagu',
                'bakat' => ['Musikal', 'Logis Matematis', 'Intrapersonal']
            ],
            [
                'name' => 'Produser Musik',
                'bakat' => ['Musikal', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Guru Musik',
                'bakat' => ['Musikal', 'Interpersonal', 'Kinestetik']
            ],
            [
                'name' => 'Sound Engineer',
                'bakat' => ['Musikal', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Penyiar radio',
                'bakat' => ['Interpersonal', 'Linguistik', 'Musikal']
            ]
        ];

        foreach ($profesi as $resProfesi) {
            $profesi = Profesi::create([
                'name' => $resProfesi['name']
            ]);
            $bakatIds = Bakat::whereIn('name', $resProfesi['bakat'])->pluck('id')->toArray();
            $profesi->bakat()->attach($bakatIds);
        }
    }
}

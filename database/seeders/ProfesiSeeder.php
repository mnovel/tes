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
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Jurnalis/Wartawan',
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Sekretaris',
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Influencer',
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Copy Writer',
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Podcaster',
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Penerjemah',
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Penulis',
                'bakat' => ['Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'Sutradara',
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Diplomat',
                'bakat' => ['Linguistik']
            ],
            [
                'name' => 'Dokter',
                'bakat' => ['Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Programmer',
                'bakat' => ['Logis Matematis']
            ],
            [
                'name' => 'Data Analyst',
                'bakat' => ['Logis Matematis']
            ],
            [
                'name' => 'Game Developer',
                'bakat' => ['Logis Matematis']
            ],
            [
                'name' => 'Manajer',
                'bakat' => ['Logis Matematis', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Pengusaha',
                'bakat' => ['Logis Matematis']
            ],
            [
                'name' => 'Konsultan',
                'bakat' => ['Logis Matematis', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Ahli Teknologi Pangan',
                'bakat' => ['Logis Matematis']
            ],
            [
                'name' => 'Apoteker',
                'bakat' => ['Logis Matematis']
            ],
            [
                'name' => 'Aktuaris',
                'bakat' => ['Logis Matematis']
            ],
            [
                'name' => 'Robotik dan AI Specialist',
                'bakat' => ['Logis Matematis']
            ],
            [
                'name' => 'Desainer',
                'bakat' => ['Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Ilustrator',
                'bakat' => ['Visual Spasial']
            ],
            [
                'name' => 'Arsitek',
                'bakat' => ['Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Pilot',
                'bakat' => ['Visual Spasial']
            ],
            [
                'name' => 'Perencana Wilayah Kota',
                'bakat' => ['Visual Spasial']
            ],
            [
                'name' => 'Seniman',
                'bakat' => ['Visual Spasial', 'Intrapersonal', 'Kinestetik']
            ],
            [
                'name' => 'Insinyur',
                'bakat' => ['Visual Spasial']
            ],
            [
                'name' => 'Kartografer',
                'bakat' => ['Visual Spasial']
            ],
            [
                'name' => 'Ahli VR/AR',
                'bakat' => ['Visual Spasial']
            ],
            [
                'name' => 'Fotografer',
                'bakat' => ['Visual Spasial']
            ],
            [
                'name' => 'Arkeolog',
                'bakat' => ['Visual Spasial']
            ],
            [
                'name' => 'Psikolog',
                'bakat' => ['Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Guru',
                'bakat' => ['Interpersonal']
            ],
            [
                'name' => 'Perawat',
                'bakat' => ['Interpersonal']
            ],
            [
                'name' => 'HRD',
                'bakat' => ['Interpersonal']
            ],
            [
                'name' => 'Politisi',
                'bakat' => ['Interpersonal']
            ],
            [
                'name' => 'Sales Marketing',
                'bakat' => ['Interpersonal']
            ],
            [
                'name' => 'Mentor',
                'bakat' => ['Interpersonal']
            ],
            [
                'name' => 'Pekerja Sosial',
                'bakat' => ['Interpersonal']
            ],
            [
                'name' => 'Public Relation',
                'bakat' => ['Interpersonal']
            ],
            [
                'name' => 'Konselor',
                'bakat' => ['Intrapersonal']
            ],
            [
                'name' => 'Konsultan Karier',
                'bakat' => ['Intrapersonal']
            ],
            [
                'name' => 'Guru Agama',
                'bakat' => ['Intrapersonal']
            ],
            [
                'name' => 'Entrepreneur',
                'bakat' => ['Intrapersonal']
            ],
            [
                'name' => 'Sosiolog/Antropolog',
                'bakat' => ['Intrapersonal']
            ],
            [
                'name' => 'Musisi',
                'bakat' => ['Intrapersonal', 'Musikal']
            ],
            [
                'name' => 'Manajer SDM',
                'bakat' => ['Intrapersonal']
            ],
            [
                'name' => 'Atlet',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'Artis/Seniman',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'Koreografer',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'Tour Guide',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'Koki',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'MUA',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'Fisioterapis',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'Instruktur',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'Traveller',
                'bakat' => ['Kinestetik']
            ],
            [
                'name' => 'Dokter Hewan',
                'bakat' => ['Naturalis']
            ],
            [
                'name' => 'Ahli Teknologi Lingkungan',
                'bakat' => ['Naturalis']
            ],
            [
                'name' => 'Ahli Pengelolaan SDA',
                'bakat' => ['Naturalis']
            ],
            [
                'name' => 'Aktivis Lingkungan',
                'bakat' => ['Naturalis']
            ],
            [
                'name' => 'Agronomis (Ahli Pertanian)',
                'bakat' => ['Naturalis']
            ],
            [
                'name' => 'Agropreneur',
                'bakat' => ['Naturalis']
            ],
            [
                'name' => 'Pengelola Ekowisata',
                'bakat' => ['Naturalis']
            ],
            [
                'name' => 'Komposer Lagu',
                'bakat' => ['Musikal']
            ],
            [
                'name' => 'Produser Musik',
                'bakat' => ['Musikal']
            ],
            [
                'name' => 'Peneliti Musik',
                'bakat' => ['Musikal']
            ],
            [
                'name' => 'Guru Musik',
                'bakat' => ['Musikal']
            ],
            [
                'name' => 'Sound Engineer',
                'bakat' => ['Musikal']
            ],
            [
                'name' => 'Music Director',
                'bakat' => ['Musikal']
            ],
            [
                'name' => 'Penyiar Radio',
                'bakat' => ['Musikal']
            ],
            [
                'name' => 'Ahli Terapi Musik',
                'bakat' => ['Musikal']
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

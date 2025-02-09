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
        $jurusans = [
            [
                'name' => 'Pendidikan Seni Musik',
                'bakat' => ['Musikal', 'Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Etnomusikologi',
                'bakat' => ['Musikal', 'Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Seni Pertunjukan',
                'bakat' => ['Kinestetik', 'Musikal', 'Visual Spasial']
            ],
            [
                'name' => 'Kesehatan dan Keselamatan Kerja',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Kinestetik']
            ],
            [
                'name' => 'Produksi Media',
                'bakat' => ['Visual Spasial', 'Linguistik', 'Kinestetik']
            ],
            [
                'name' => 'Ilmu Komunikasi',
                'bakat' => ['Linguistik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Kesekretariatan',
                'bakat' => ['Linguistik', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Sastra',
                'bakat' => ['Linguistik', 'Intrapersonal', 'Interpersonal']
            ],
            [
                'name' => 'Sosiologi',
                'bakat' => ['Interpersonal', 'Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Manajemen Pendidikan',
                'bakat' => ['Logis Matematis', 'Interpersonal', 'Linguistik']
            ],
            [
                'name' => 'Filsafat',
                'bakat' => ['Logis Matematis', 'Intrapersonal', 'Linguistik']
            ],
            [
                'name' => 'Hukum',
                'bakat' => ['Linguistik', 'Logis Matematis', 'Interpersonal']
            ],
            [
                'name' => 'Ilmu Politik',
                'bakat' => ['Linguistik', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Bisnis Digital',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'Ekonomi Pembangunan',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'Antropologi',
                'bakat' => ['Linguistik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Kewirausahaan',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Arkeologi',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Pariwisata',
                'bakat' => ['Interpersonal', 'Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'Sejarah',
                'bakat' => ['Linguistik', 'Logis Matematis', 'Intrapersonal']
            ],
            [
                'name' => 'Ilmu Perpustakaan',
                'bakat' => ['Linguistik', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Desain Grafis',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Linguistik']
            ],
            [
                'name' => 'DKV (Desain Komunikasi Visual)',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Pendidikan Jasmani & Olahraga',
                'bakat' => ['Kinestetik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Kepelatihan Olahraga',
                'bakat' => ['Kinestetik', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Teater/Drama',
                'bakat' => ['Interpersonal', 'Kinestetik', 'Linguistik']
            ],
            [
                'name' => 'Pendidikan Sendratasik',
                'bakat' => ['Kinestetik', 'Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Ilmu Olahraga',
                'bakat' => ['Kinestetik', 'Logis Matematis', 'Intrapersonal']
            ],
            [
                'name' => 'Hubungan Internasional',
                'bakat' => ['Linguistik', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Administrasi Perkantoran',
                'bakat' => ['Linguistik', 'Logis Matematis', 'Interpersonal']
            ],
            [
                'name' => 'BK (Bimbingan Konseling)',
                'bakat' => ['Interpersonal', 'Intrapersonal', 'Linguistik']
            ],
            [
                'name' => 'PGSD (Pendidikan Guru Sekolah Dasar)',
                'bakat' => ['Interpersonal', 'Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'PAI (Pendidikan Agama Islam)',
                'bakat' => ['Linguistik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Psikologi',
                'bakat' => ['Interpersonal', 'Intrapersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Studi Agama-Agama',
                'bakat' => ['Linguistik', 'Intrapersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Penciptaan Musik',
                'bakat' => ['Musikal', 'Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Sains Data',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Linguistik']
            ],
            [
                'name' => 'Teknik Lingkungan',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Visual Spasial']
            ],
            [
                'name' => 'Biologi',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Visual Spasial']
            ],
            [
                'name' => 'Farmasi',
                'bakat' => ['Logis Matematis', 'Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Teknologi Pertanian',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Kinestetik']
            ],
            [
                'name' => 'Gizi',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Interpersonal']
            ],
            [
                'name' => 'Kehutanan',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Peternakan',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Pertanian',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Ilmu Lingkungan',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Visual Spasial']
            ],
            [
                'name' => 'Sistem Informasi',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Intrapersonal']
            ],
            [
                'name' => 'Ilmu Komputer',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Intrapersonal']
            ],
            [
                'name' => 'Aktuaria',
                'bakat' => ['Logis Matematis', 'Intrapersonal', 'Visual Spasial']
            ],
            [
                'name' => 'Statistika',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Linguistik']
            ],
            [
                'name' => 'Arsitektur',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Logis Matematis']
            ],
            [
                'name' => 'Perencanaan Wilayah Kota',
                'bakat' => ['Visual Spasial', 'Logis Matematis', 'Linguistik']
            ],
            [
                'name' => 'Teknik Geomatika',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Naturalis']
            ],
            [
                'name' => 'Teknik Sipil',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Kedokteran',
                'bakat' => ['Logis Matematis', 'Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Teknik Mesin',
                'bakat' => ['Logis Matematis', 'Kinestetik', 'Visual Spasial']
            ],
            [
                'name' => 'Fisioterapi',
                'bakat' => ['Kinestetik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Teknik Industri',
                'bakat' => ['Logis Matematis', 'Kinestetik', 'Visual Spasial']
            ],
            [
                'name' => 'Administrasi Publik',
                'bakat' => ['Interpersonal', 'Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Pendidikan Luar Sekolah',
                'bakat' => ['Interpersonal', 'Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'Pendidikan Ekonomi',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Akuntansi',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Ekonomi Syariah',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Perencanaan Keuangan',
                'bakat' => ['Logis Matematis', 'Interpersonal', 'Linguistik']
            ],
            [
                'name' => 'Geografi',
                'bakat' => ['Visual Spasial', 'Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Geologi',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Ilmu Kelautan',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Agribisnis',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Interpersonal']
            ],
            [
                'name' => 'Agroteknologi',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Ekowisata',
                'bakat' => ['Naturalis', 'Interpersonal', 'Visual Spasial']
            ],
            [
                'name' => 'Tata Boga',
                'bakat' => ['Kinestetik', 'Visual Spasial', 'Logis Matematis']
            ],
            [
                'name' => 'Manajemen SDA (Sumber Daya Alam)',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Visual Spasial']
            ],
            [
                'name' => 'Desain Interior',
                'bakat' => ['Visual Spasial', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Desain Produk',
                'bakat' => ['Visual Spasial', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Seni Rupa Murni',
                'bakat' => ['Visual Spasial', 'Intrapersonal', 'Kinestetik']
            ],
            [
                'name' => 'Tata Busana',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Tari',
                'bakat' => ['Kinestetik', 'Visual Spasial', 'Musikal']
            ],
            [
                'name' => 'Tata Rias',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Fotografi',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Televisi dan Film',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Linguistik']
            ],
            [
                'name' => 'Film dan Animasi',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Linguistik']
            ],
            [
                'name' => 'Teknologi Game',
                'bakat' => ['Logis Matematis', 'Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Manajemen Seni',
                'bakat' => ['Linguistik', 'Visual Spasial', 'Intrapersonal']
            ],
            [
                'name' => 'Manajemen',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Kesehatan Masyarakat',
                'bakat' => ['Interpersonal', 'Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Pendidikan Bahasa',
                'bakat' => ['Linguistik', 'Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Pendidikan Biologi',
                'bakat' => ['Logis Matematis', 'Naturalis', 'Interpersonal']
            ],
            [
                'name' => 'Manajemen Informatika',
                'bakat' => ['Logis Matematis', 'Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'Broadcasting',
                'bakat' => ['Interpersonal', 'Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'Seni Musik',
                'bakat' => ['Musikal', 'Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'Seni Kriya',
                'bakat' => ['Visual Spasial', 'Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Branding',
                'bakat' => ['Interpersonal', 'Visual Spasial', 'Linguistik']
            ],
            [
                'name' => 'Kearsipan',
                'bakat' => ['Linguistik', 'Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Manajemen Industri Katering',
                'bakat' => ['Interpersonal', 'Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Pendidikan Kependudukan dan Lingkungan Hidup',
                'bakat' => ['Naturalis', 'Logis Matematis', 'Interpersonal']
            ],
            [
                'name' => 'Tasawuf Psikoterapi',
                'bakat' => ['Intrapersonal', 'Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Pengobatan Tradisional',
                'bakat' => ['Naturalis', 'Kinestetik', 'Logis Matematis']
            ],
        ];

        foreach ($jurusans as $resJurusan) {
            $jurusan = Jurusan::create([
                'name' => $resJurusan['name'],
            ]);

            $bakatIds = Bakat::whereIn('name', $resJurusan['bakat'])->pluck('id');
            $jurusan->bakat()->attach($bakatIds);
        }
    }
}

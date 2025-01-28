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
                'bakat' => ['Linguistik', 'Musikal']
            ],
            [
                'name' => 'Seni Pertunjukan',
                'bakat' => ['Musikal', 'Linguistik']
            ],
            [
                'name' => 'Penciptaan Musik',
                'bakat' => ['Musikal', 'Linguistik']
            ],
            [
                'name' => 'Etnomusikologi',
                'bakat' => ['Musikal', 'Linguistik']
            ],
            [
                'name' => 'Ilmu Komunikasi',
                'bakat' => ['Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Manajemen Pendidikan',
                'bakat' => ['Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Kesekretariatan',
                'bakat' => ['Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Sejarah',
                'bakat' => ['Linguistik', 'Logis Matematis']
            ],
            [
                'name' => 'Filsafat',
                'bakat' => ['Logis Matematis', 'Linguistik']
            ],
            [
                'name' => 'Hukum',
                'bakat' => ['Logis Matematis', 'Linguistik']
            ],
            [
                'name' => 'Ilmu Politik',
                'bakat' => ['Logis Matematis', 'Linguistik']
            ],
            [
                'name' => 'Bisnis Digital',
                'bakat' => ['Logis Matematis', 'Linguistik']
            ],
            [
                'name' => 'Ekonomi Pembangunan',
                'bakat' => ['Logis Matematis', 'Linguistik']
            ],
            [
                'name' => 'Pendidikan Biologi',
                'bakat' => ['Linguistik', 'Naturalis']
            ],
            [
                'name' => 'Hukum Lingkungan',
                'bakat' => ['Linguistik', 'Naturalis']
            ],
            [
                'name' => 'Pariwisata',
                'bakat' => ['Naturalis', 'Linguistik']
            ],
            [
                'name' => 'Arkeologi',
                'bakat' => ['Naturalis', 'Linguistik']
            ],
            [
                'name' => 'Ilmu Perpustakaan',
                'bakat' => ['Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'Manajemen Informatika',
                'bakat' => ['Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'Kearsipan',
                'bakat' => ['Linguistik', 'Visual Spasial']
            ],
            [
                'name' => 'Desain Grafis',
                'bakat' => ['Visual Spasial', 'Linguistik']
            ],
            [
                'name' => 'DKV (Desain Komunikasi Visual)',
                'bakat' => ['Visual Spasial', 'Linguistik']
            ],
            [
                'name' => 'Televisi dan Film',
                'bakat' => ['Visual Spasial', 'Linguistik']
            ],
            [
                'name' => 'Broadcasting',
                'bakat' => ['Linguistik', 'Kinestetik']
            ],
            [
                'name' => 'Teater/Drama',
                'bakat' => ['Kinestetik', 'Linguistik']
            ],
            [
                'name' => 'Pendidikan Sendratasik',
                'bakat' => ['Kinestetik', 'Linguistik']
            ],
            [
                'name' => 'Hubungan Internasional',
                'bakat' => ['Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'Administrasi Perkantoran',
                'bakat' => ['Linguistik', 'Interpersonal']
            ],
            [
                'name' => 'BK (Bimbingan Konseling)',
                'bakat' => ['Interpersonal', 'Linguistik']
            ],
            [
                'name' => 'Pendidikan Bahasa',
                'bakat' => ['Interpersonal', 'Linguistik']
            ],
            [
                'name' => 'PGSD (Pendidikan Guru Sekolah Dasar)',
                'bakat' => ['Interpersonal', 'Linguistik']
            ],
            [
                'name' => 'Sosiologi',
                'bakat' => ['Interpersonal', 'Linguistik']
            ],
            [
                'name' => 'Sastra',
                'bakat' => ['Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'Manajemen SDM',
                'bakat' => ['Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'PAI (Pendidikan Agama Islam)',
                'bakat' => ['Linguistik', 'Intrapersonal']
            ],
            [
                'name' => 'Psikologi',
                'bakat' => ['Intrapersonal', 'Linguistik']
            ],
            [
                'name' => 'Studi Agama-Agama',
                'bakat' => ['Intrapersonal', 'Linguistik']
            ],
            [
                'name' => 'Antropologi',
                'bakat' => ['Intrapersonal', 'Linguistik']
            ],
            [
                'name' => 'Produksi Media',
                'bakat' => ['Musikal', 'Logis Matematis']
            ],
            [
                'name' => 'Audio Engineering',
                'bakat' => ['Musikal', 'Logis Matematis']
            ],
            [
                'name' => 'Akustika',
                'bakat' => ['Logis Matematis', 'Musikal']
            ],
            [
                'name' => 'Film dan Animasi',
                'bakat' => ['Musikal', 'Visual Spasial']
            ],
            [
                'name' => 'Desain Multimedia',
                'bakat' => ['Visual Spasial', 'Musikal']
            ],
            [
                'name' => 'Teknologi Game',
                'bakat' => ['Visual Spasial', 'Musikal']
            ],
            [
                'name' => 'Komposisi Musik',
                'bakat' => ['Musikal', 'Kinestetik']
            ],
            [
                'name' => 'Seni Musik',
                'bakat' => ['Musikal', 'Kinestetik']
            ],
            [
                'name' => 'Seni Karawitan',
                'bakat' => ['Musikal', 'Interpersonal']
            ],
            [
                'name' => 'Sains Data',
                'bakat' => ['Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Teknik Lingkungan',
                'bakat' => ['Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Biologi',
                'bakat' => ['Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Farmasi',
                'bakat' => ['Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Teknologi Pertanian',
                'bakat' => ['Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Agroteknologi',
                'bakat' => ['Logis Matematis', 'Naturalis']
            ],
            [
                'name' => 'Gizi',
                'bakat' => ['Naturalis', 'Logis Matematis']
            ],
            [
                'name' => 'Kehutanan',
                'bakat' => ['Naturalis', 'Logis Matematis']
            ],
            [
                'name' => 'Peternakan',
                'bakat' => ['Naturalis', 'Logis Matematis']
            ],
            [
                'name' => 'Pertanian',
                'bakat' => ['Naturalis', 'Logis Matematis']
            ],
            [
                'name' => 'Ilmu Lingkungan',
                'bakat' => ['Naturalis', 'Logis Matematis']
            ],
            [
                'name' => 'Ilmu Kelautan',
                'bakat' => ['Naturalis', 'Logis Matematis']
            ],
            [
                'name' => 'Teknik',
                'bakat' => ['Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Sistem Informasi',
                'bakat' => ['Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Ilmu Komputer',
                'bakat' => ['Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Aktuaria',
                'bakat' => ['Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Statistika',
                'bakat' => ['Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Geografi',
                'bakat' => ['Logis Matematis', 'Visual Spasial']
            ],
            [
                'name' => 'Arsitektur',
                'bakat' => ['Visual Spasial', 'Logis Matematis']
            ],
            [
                'name' => 'Teknik Penerbangan',
                'bakat' => ['Visual Spasial', 'Logis Matematis']
            ],
            [
                'name' => 'Perencanaan Wilayah Kota',
                'bakat' => ['Visual Spasial', 'Logis Matematis']
            ],
            [
                'name' => 'Teknik Geomatika',
                'bakat' => ['Visual Spasial', 'Logis Matematis']
            ],
            [
                'name' => 'Desain Teknologi',
                'bakat' => ['Visual Spasial', 'Logis Matematis']
            ],
            [
                'name' => 'Teknik Sipil',
                'bakat' => ['Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Kedokteran',
                'bakat' => ['Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Rekayasa Biomedis',
                'bakat' => ['Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Teknik Mesin',
                'bakat' => ['Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Teknologi Medis Olahraga',
                'bakat' => ['Logis Matematis', 'Kinestetik']
            ],
            [
                'name' => 'Ilmu Olahraga',
                'bakat' => ['Kinestetik', 'Logis Matematis']
            ],
            [
                'name' => 'Teknik Industri',
                'bakat' => ['Kinestetik', 'Logis Matematis']
            ],
            [
                'name' => 'Administrasi Perkantoran',
                'bakat' => ['Logis Matematis', 'Interpersonal']
            ],
            [
                'name' => 'Manajemen',
                'bakat' => ['Logis Matematis', 'Interpersonal']
            ],
            [
                'name' => 'Kesehatan Masyarakat',
                'bakat' => ['Logis Matematis', 'Interpersonal']
            ],
            [
                'name' => 'Pendidikan Luar Sekolah',
                'bakat' => ['Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Administrasi Publik',
                'bakat' => ['Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Pendidikan Ekonomi',
                'bakat' => ['Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Kewirausahaan',
                'bakat' => ['Interpersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Akuntansi',
                'bakat' => ['Logis Matematis', 'Intrapersonal']
            ],
            [
                'name' => 'Ekonomi Syariah',
                'bakat' => ['Logis Matematis', 'Intrapersonal']
            ],
            [
                'name' => 'Perencanaan Keuangan',
                'bakat' => ['Logis Matematis', 'Intrapersonal']
            ],
            [
                'name' => 'Kesehatan dan Keselamatan Kerja',
                'bakat' => ['Logis Matematis', 'Intrapersonal']
            ],
            [
                'name' => 'Psikologi',
                'bakat' => ['Intrapersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Statistika',
                'bakat' => ['Intrapersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Filsafat',
                'bakat' => ['Intrapersonal', 'Logis Matematis']
            ],
            [
                'name' => 'Geologi',
                'bakat' => ['Naturalis', 'Visual Spasial']
            ],
            [
                'name' => 'Teknik Lingkungan',
                'bakat' => ['Naturalis', 'Visual Spasial']
            ],
            [
                'name' => 'Ilmu Kelautan',
                'bakat' => ['Naturalis', 'Visual Spasial']
            ],
            [
                'name' => 'Arkeologi',
                'bakat' => ['Visual Spasial', 'Naturalis']
            ],
            [
                'name' => 'Teknologi Pertanian',
                'bakat' => ['Visual Spasial', 'Naturalis']
            ],
            [
                'name' => 'Geografi',
                'bakat' => ['Visual Spasial', 'Naturalis']
            ],
            [
                'name' => 'Seni Kriya',
                'bakat' => ['Visual Spasial', 'Naturalis']
            ],
            [
                'name' => 'Ekowisata',
                'bakat' => ['Naturalis', 'Kinestetik']
            ],
            [
                'name' => 'Tata Boga',
                'bakat' => ['Kinestetik', 'Naturalis']
            ],
            [
                'name' => 'Manajemen Industri Katering',
                'bakat' => ['Kinestetik', 'Naturalis']
            ],
            [
                'name' => 'Agribisnis',
                'bakat' => ['Naturalis', 'Interpersonal']
            ],
            [
                'name' => 'Manajemen SDA (Sumber Daya Alam)',
                'bakat' => ['Naturalis', 'Interpersonal']
            ],
            [
                'name' => 'Ekologi Manusia',
                'bakat' => ['Naturalis', 'Intrapersonal']
            ],
            [
                'name' => 'Pendidikan Kependudukan dan Lingkungan Hidup',
                'bakat' => ['Naturalis', 'Intrapersonal']
            ],
            [
                'name' => 'Pengobatan Tradisional',
                'bakat' => ['Intrapersonal', 'Naturalis']
            ],
            [
                'name' => 'Desain Interior',
                'bakat' => ['Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Desain Produk',
                'bakat' => ['Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Seni Rupa Murni',
                'bakat' => ['Visual Spasial', 'Kinestetik']
            ],
            [
                'name' => 'Tata Busana',
                'bakat' => ['Kinestetik', 'Visual Spasial']
            ],
            [
                'name' => 'Tari',
                'bakat' => ['Kinestetik', 'Visual Spasial']
            ],
            [
                'name' => 'Tata Rias',
                'bakat' => ['Kinestetik', 'Visual Spasial']
            ],
            [
                'name' => 'Fotografi',
                'bakat' => ['Visual Spasial', 'Interpersonal']
            ],
            [
                'name' => 'Branding',
                'bakat' => ['Interpersonal', 'Visual Spasial']
            ],
            [
                'name' => 'Manajemen Seni',
                'bakat' => ['Interpersonal', 'Visual Spasial']
            ],
            [
                'name' => 'Fotografi',
                'bakat' => ['Visual Spasial', 'Intrapersonal']
            ],
            [
                'name' => 'Desain Produk',
                'bakat' => ['Visual Spasial', 'Intrapersonal']
            ],
            [
                'name' => 'Seni Kriya',
                'bakat' => ['Visual Spasial', 'Intrapersonal']
            ],
            [
                'name' => 'Pendidikan Jasmani & Olahraga',
                'bakat' => ['Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Fisioterapi',
                'bakat' => ['Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Kepelatihan Olahraga',
                'bakat' => ['Kinestetik', 'Interpersonal']
            ],
            [
                'name' => 'Pendidikan Sendratasik',
                'bakat' => ['Interpersonal', 'Kinestetik']
            ],
            [
                'name' => 'Seni Rupa Murni',
                'bakat' => ['Kinestetik', 'Intrapersonal']
            ],
            [
                'name' => 'Psikologi',
                'bakat' => ['Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Manajemen SDM',
                'bakat' => ['Interpersonal', 'Intrapersonal']
            ],
            [
                'name' => 'Tasawuf Psikoterapi',
                'bakat' => ['Intrapersonal', 'Interpersonal']
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

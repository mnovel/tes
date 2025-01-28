<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\PerguruanTinggi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerguruanTinggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perguruanTinggi = [
            [
                'name' => 'Universitas Indonesia',
                'rank' => 0,
                'jurusan' => ['Produksi media', 'Ilmu komunikasi', 'Sastra', 'Sosiologi', 'Filsafat', 'Hukum', 'Ilmu politik', 'Bisnis digital', 'Ekonomi pembangunan', 'Antropologi', 'Arkeologi', 'Pariwisata', 'Sejarah', 'Ilmu perpustakaan', 'Hubungan internasional', 'Administrasi perkantoran', 'Kedokteran', 'Biologi', 'Geografi', 'Statistika', 'Aktuaria', 'Geologi', 'Teknik sipil', 'Teknik mesin', 'Teknik industri', 'Teknik lingkungan', 'Arsitektur', 'Akuntansi', 'Psikologi', 'Kesehatan Masyarakat', 'Gizi', 'Ilmu komputer', 'Sistem informasi', 'Farmasi', 'Manajemen', 'Fisioterapi', 'Kesehatan dan Keselamatan Kerja'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Gadjah Mada',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sastra', 'Sosiologi', 'Filsafat', 'Hukum', 'Ilmu politik', 'Antropologi', 'Arkeologi', 'Pariwisata', 'Sejarah', 'Hubungan internasional', 'Biologi', 'Akuntansi', 'Manajemen', 'Farmasi', 'Geografi', 'Gizi', 'Kedokteran', 'Kehutanan', 'Ilmu komputer', 'Statistika', 'Agribisnis', 'Peternakan', 'Psikologi', 'Arsitektur', 'Perencanaan wilayah kota', 'Teknik industri', 'Teknik mesin', 'Teknik sipil', 'Teknologi pertanian', 'Kearsipan'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Airlangga',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sastra', 'Sosiologi', 'Hukum', 'Ilmu politik', 'Bisnis digital', 'Ekonomi pembangunan', 'Antropologi', 'Pariwisata', 'Sejarah', 'Ilmu perpustakaan', 'Hubungan internasional', 'Administrasi perkantoran', 'Kedokteran', 'Manajemen', 'Farmasi', 'Administrasi publik', 'Sistem informasi', 'Statistika', 'Biologi', 'Teknik lingkungan', 'Kesehatan Masyarakat', 'Gizi', 'Psikologi', 'Teknik industri', 'Kearsipan', 'Pengobatan Tradisional', 'Fisioterapi', 'Manajemen SDA (Sumber Daya Alam)', 'Kesehatan dan Keselamatan Kerja'],
                'status' => 'Active',
            ],
            [
                'name' => 'Institut Teknologi Bandung',
                'rank' => 0,
                'jurusan' => ['DKV (Desain Komunikasi Visual)', 'Teknik geomatika', 'Aktuaria', 'Desain produk', 'Seni Kriya', 'Seni rupa murni', 'Desain interior', 'Teknik lingkungan', 'Teknik sipil', 'Teknik industri', 'Arsitektur', 'Perencanaan wilayah kota', 'Manajemen', 'Farmasi', 'Biologi', 'Sistem informasi', 'Manajemen SDA (Sumber Daya Alam)', 'Kewirausahaan'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Brawijaya',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sosiologi', 'Sastra', 'Hukum', 'Ilmu politik', 'Ekonomi pembangunan', 'Antropologi', 'Pariwisata', 'Sejarah', 'Ilmu perpustakaan', 'Desain grafis', 'Hubungan internasional', 'Akuntansi', 'Manajemen', 'Administrasi publik', 'Agribisnis', 'Agroteknologi', 'Kehutanan', 'Peternakan', 'Teknik sipil', 'Teknik mesin', 'Teknik industri', 'Perencanaan wilayah kota', 'Arsitektur', 'Kedokteran', 'Farmasi', 'Ilmu kelautan', 'Biologi', 'Statistika', 'Aktuaria', 'Teknik lingkungan', 'Teknologi pertanian', 'Seni rupa murni', 'Sistem informasi', 'Gizi', 'Manajemen SDA (Sumber Daya Alam)', 'Kewirausahaan'],
                'status' => 'Active',
            ],
            [
                'name' => 'Institut Pertanian Bogor',
                'rank' => 0,
                'jurusan' => ['Ekonomi pembangunan', 'Arsitektur', 'Ilmu kelautan', 'Ekowisata', 'Teknik lingkungan', 'Biologi', 'Agribisnis', 'Manajemen', 'Ekonomi syariah', 'Gizi', 'Kedokteran', 'Statistika', 'Ilmu komputer', 'Aktuaria', 'Teknologi pertanian', 'Manajemen SDA (Sumber Daya Alam)'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Sebelas Maret',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sastra', 'Sosiologi', 'Hukum', 'Bisnis digital', 'Ekonomi pembangunan', 'Antropologi', 'Sejarah', 'DKV (Desain Komunikasi Visual)', 'Pendidikan jasmani & olahraga', 'Kepelatihan olahraga', 'Ilmu olahraga', 'Hubungan internasional', 'Administrasi perkantoran', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Akuntansi', 'Manajemen', 'Kedokteran', 'Agribisnis', 'Agroteknologi', 'Peternakan', 'Arsitektur', 'Perencanaan wilayah kota', 'Teknik industri', 'Teknik mesin', 'Teknik sipil', 'Pendidikan bahasa', 'Pendidikan biologi', 'Biologi', 'Farmasi', 'Statistika', 'Ilmu lingkungan', 'Desain interior', 'Seni Kriya', 'Seni rupa murni', 'Psikologi', 'Ilmu perpustakaan', 'Teknologi pertanian', 'Kesehatan dan Keselamatan Kerja'],
                'status' => 'Active',
            ],
            [
                'name' => 'Institut Teknologi Sepuluh November',
                'rank' => 0,
                'jurusan' => ['Bisnis digital', 'DKV (Desain Komunikasi Visual)', 'Biologi', 'Aktuaria', 'Statistika', 'Teknik mesin', 'Teknik sipil', 'Arsitektur', 'Teknik lingkungan', 'Perencanaan wilayah kota', 'Teknik geomatika', 'Kedokteran', 'Sistem informasi', 'Desain interior', 'Desain produk', 'Manajemen SDA (Sumber Daya Alam)'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Negeri Malang',
                'rank' => 0,
                'jurusan' => ['Pendidikan seni musik', 'Sastra', 'Sosiologi', 'Sejarah', 'Ilmu perpustakaan', 'DKV (Desain Komunikasi Visual)', 'Pendidikan jasmani & olahraga', 'Kepelatihan olahraga', 'Pendidikan Sendratasik', 'Ilmu olahraga', 'Administrasi perkantoran', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Akuntansi', 'Tata boga', 'Pendidikan bahasa', 'Biologi', 'Pendidikan biologi', 'Gizi', 'Manajemen', 'Teknik mesin', 'Teknik industri', 'Teknik sipil', 'Tata busana', 'Kesehatan Masyarakat', 'Geografi', 'Ilmu komunikasi', 'Psikologi', 'Kedokteran'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Diponegoro',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sastra', 'Hukum', 'Bisnis digital', 'Antropologi', 'Sejarah', 'Ilmu perpustakaan', 'Hubungan internasional', 'Administrasi perkantoran', 'Manajemen', 'Akuntansi', 'Administrasi publik', 'Kedokteran', 'Gizi', 'Farmasi', 'Kesehatan Masyarakat', 'Ilmu kelautan', 'Manajemen SDA (Sumber Daya Alam)', 'Peternakan', 'Agribisnis', 'Agroteknologi', 'Psikologi', 'Biologi', 'Statistika', 'Teknik sipil', 'Arsitektur', 'Teknik mesin', 'Perencanaan wilayah kota', 'Teknik industri', 'Teknik lingkungan', 'Kesehatan dan Keselamatan Kerja'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Negeri Semarang (UNNES)',
                'rank' => 0,
                'jurusan' => ['Pendidikan seni musik', 'Sastra', 'Sosiologi', 'Hukum', 'Ilmu politik', 'Sejarah', 'DKV (Desain Komunikasi Visual)', 'Pendidikan jasmani & olahraga', 'Kepelatihan olahraga', 'Pendidikan Sendratasik', 'Ilmu olahraga', 'Administrasi perkantoran', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Psikologi', 'Pendidikan bahasa', 'Seni rupa murni', 'Geografi', 'Ilmu komunikasi', 'Statistika', 'Biologi', 'Pendidikan biologi', 'Sistem informasi', 'Ilmu lingkungan', 'Teknik sipil', 'Arsitektur', 'Teknik mesin', 'Tata boga', 'Tata busana', 'Tata rias', 'Manajemen', 'Akuntansi', 'Kedokteran', 'Kesehatan Masyarakat', 'Gizi', 'Farmasi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Negeri Surabaya (UNESA)',
                'rank' => 0,
                'jurusan' => ['Pendidikan seni musik', 'Ilmu komunikasi', 'Sastra', 'Manajemen pendidikan', 'Sosiologi', 'Hukum', 'Ilmu politik', 'Bisnis digital', 'Sejarah', 'Desain grafis', 'DKV (Desain Komunikasi Visual)', 'Pendidikan jasmani & olahraga', 'Kepelatihan olahraga', 'Pendidikan Sendratasik', 'Ilmu olahraga', 'Hubungan internasional', 'Administrasi perkantoran', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Pendidikan bahasa', 'Seni rupa murni', 'Seni musik', 'Manajemen', 'Akuntansi', 'Gizi', 'Psikologi', 'Administrasi publik', 'Biologi', 'Pendidikan biologi', 'Sains data', 'Teknik sipil', 'Teknik mesin', 'Sistem informasi', 'Tata rias', 'Tata boga', 'Tata busana', 'Manajemen Informatika', 'Kedokteran', 'Perencanaan wilayah kota', 'Aktuaria', 'Fisioterapi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Jember (UNEJ)',
                'rank' => 0,
                'jurusan' => ['Kesekretariatan', 'Sastra', 'Sosiologi', 'Hukum', 'Ekonomi pembangunan', 'Pariwisata', 'Sejarah', 'Hubungan internasional', 'Farmasi', 'Kedokteran', 'Teknologi pertanian', 'Kesehatan Masyarakat', 'Ilmu komputer', 'Agroteknologi', 'Pertanian', 'Agribisnis', 'Peternakan', 'Perencanaan keuangan', 'Akuntansi', 'Manajemen', 'Ekonomi syariah', 'Televisi dan Film', 'Gizi', 'Teknik mesin', 'Teknik sipil', 'Perencanaan wilayah kota', 'Teknik lingkungan', 'Biologi', 'Administrasi publik', 'Pendidikan bahasa', 'Geografi', 'Sistem informasi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri Sunan Gunung Djati (UIN SGD) Bandung',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sosiologi', 'Manajemen pendidikan', 'Filsafat', 'Hukum', 'Sejarah', 'Ilmu perpustakaan', 'BK (Bimbingan Konseling)', 'PAI (Pendidikan Agama Islam)', 'Studi agama-agama', 'Tasawuf Psikoterapi', 'Pendidikan bahasa', 'Pendidikan biologi', 'Sastra', 'Psikologi', 'Biologi', 'Agroteknologi', 'Administrasi publik', 'Ilmu politik', 'Akuntansi', 'Ekonomi syariah', 'Perencanaan keuangan', 'Manajemen'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri Wali Songo (UIN WS) Semarang',
                'rank' => 0,
                'jurusan' => ['Sosiologi', 'Manajemen pendidikan', 'BK (Bimbingan Konseling)', 'PAI (Pendidikan Agama Islam)', 'Hukum', 'Pendidikan bahasa', 'Tasawuf Psikoterapi', 'Studi agama-agama', 'Arsitektur', 'Akuntansi', 'Manajemen', 'Ekonomi syariah', 'Ilmu politik', 'Psikologi', 'Gizi', 'Biologi', 'Pendidikan biologi', 'Teknik lingkungan', 'Ilmu komunikasi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri Sunan Kalijaga (UINSUKA) Yogyakarta',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sosiologi', 'Manajemen pendidikan', 'Filsafat', 'Hukum', 'Sejarah', 'Ilmu perpustakaan', 'BK (Bimbingan Konseling)', 'PAI (Pendidikan Agama Islam)', 'Sastra', 'Pendidikan bahasa', 'Pendidikan biologi', 'Studi agama-agama', 'Biologi', 'Teknik industri', 'Arsitektur', 'Psikologi', 'Ekonomi syariah', 'Perencanaan keuangan', 'Akuntansi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri Maulana Malik Ibrahim (UINMA) Malang',
                'rank' => 0,
                'jurusan' => ['Manajemen pendidikan', 'Hukum', 'Ilmu perpustakaan', 'PAI (Pendidikan Agama Islam)', 'Pendidikan bahasa', 'Sastra', 'Psikologi', 'Manajemen', 'Akuntansi', 'Biologi', 'Arsitektur', 'Kedokteran', 'Farmasi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri (UIN) Syarif Hidayatullah Jakarta',
                'rank' => 0,
                'jurusan' => ['Sosiologi', 'Manajemen pendidikan', 'Filsafat', 'Hukum', 'Ilmu politik', 'Ekonomi pembangunan', 'Sejarah', 'Ilmu perpustakaan', 'Hubungan internasional', 'BK (Bimbingan Konseling)', 'PAI (Pendidikan Agama Islam)', 'Pendidikan bahasa', 'Pendidikan biologi', 'Sastra', 'Studi agama-agama', 'Ilmu komunikasi', 'Psikologi', 'Manajemen', 'Akuntansi', 'Ekonomi syariah', 'Agribisnis', 'Sistem informasi', 'Biologi', 'Kesehatan Masyarakat', 'Farmasi', 'Kedokteran'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri Sunan Ampel Surabaya (UINSA)',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sosiologi', 'Manajemen pendidikan', 'Filsafat', 'Hukum', 'Sejarah', 'Hubungan internasional', 'BK (Bimbingan Konseling)', 'PAI (Pendidikan Agama Islam)', 'Sastra', 'Pendidikan bahasa', 'Studi agama-agama', 'Tasawuf Psikoterapi', 'Akuntansi', 'Ekonomi syariah', 'Manajemen', 'Arsitektur', 'Biologi', 'Ilmu kelautan', 'Sistem informasi', 'Teknik lingkungan', 'Teknik sipil', 'Ilmu politik', 'Gizi', 'Psikologi', 'Kedokteran'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri Sayyid Ali Rahmatullah Tulungagung (UINSATU)',
                'rank' => 0,
                'jurusan' => ['Filsafat', 'Hukum', 'Sejarah', 'Ilmu perpustakaan', 'BK (Bimbingan Konseling)', 'PAI (Pendidikan Agama Islam)', 'Manajemen pendidikan', 'Pendidikan biologi', 'Pendidikan bahasa', 'Sosiologi', 'Tasawuf Psikoterapi', 'Psikologi', 'Sastra', 'Ilmu komunikasi', 'Ekonomi syariah', 'Perencanaan keuangan', 'Pariwisata'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri (UIN) Salatiga',
                'rank' => 0,
                'jurusan' => ['Bisnis digital', 'Sejarah', 'Ilmu perpustakaan', 'BK (Bimbingan Konseling)', 'PAI (Pendidikan Agama Islam)', 'Ilmu komunikasi', 'Psikologi', 'Akuntansi', 'Ekonomi syariah', 'Hukum', 'Pendidikan bahasa', 'Sains data', 'Filsafat', 'Sastra'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Negeri Raden Mas Said Surakarta',
                'rank' => 0,
                'jurusan' => ['Sejarah', 'BK (Bimbingan Konseling)', 'PAI (Pendidikan Agama Islam)', 'Sastra', 'Pendidikan bahasa', 'Ilmu perpustakaan', 'Akuntansi', 'Ekonomi syariah', 'Filsafat', 'Ilmu komunikasi', 'Psikologi', 'Tasawuf Psikoterapi', 'Hukum', 'Manajemen pendidikan', 'Pendidikan biologi', 'Ilmu lingkungan', 'Sains data'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Negeri Yogyakarta (UNY)',
                'rank' => 0,
                'jurusan' => ['Pendidikan seni musik', 'Sosiologi', 'Manajemen pendidikan', 'Filsafat', 'Hukum', 'Ilmu politik', 'Sejarah', 'Pendidikan jasmani & olahraga', 'Kepelatihan olahraga', 'Ilmu olahraga', 'Administrasi perkantoran', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Psikologi', 'Pendidikan bahasa', 'Sastra', 'Seni Kriya', 'Tari', 'Pendidikan biologi', 'Biologi', 'Statistika', 'Geografi', 'Administrasi publik', 'Ilmu komunikasi', 'Pariwisata', 'Teknik mesin', 'Teknik sipil', 'Tata boga', 'Tata busana', 'Teknik industri', 'Arsitektur', 'Manajemen', 'Akuntansi', 'Kedokteran'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur',
                'rank' => 0,
                'jurusan' => ['Hukum', 'Bisnis digital', 'Ekonomi pembangunan', 'Pariwisata', 'DKV (Desain Komunikasi Visual)', 'Hubungan internasional', 'Kedokteran', 'Manajemen', 'Akuntansi', 'Teknik industri', 'Teknik sipil', 'Teknik lingkungan', 'Teknik mesin', 'Sistem informasi', 'Sains data', 'Ilmu komunikasi', 'Arsitektur', 'Desain interior', 'Agroteknologi', 'Agribisnis', 'Kewirausahaan'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Pembangunan Nasional (UPN) Veteran Yogyakarta',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Ekonomi pembangunan', 'Hubungan internasional', 'Akuntansi', 'Agribisnis', 'Agroteknologi', 'Sistem informasi', 'Teknik industri', 'Teknik geomatika', 'Teknik lingkungan'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Pembangunan Nasional (UPN) Veteran Jakarta',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Ilmu politik', 'Ekonomi pembangunan', 'Hubungan internasional', 'Akuntansi', 'Manajemen', 'Ekonomi syariah', 'Kedokteran', 'Farmasi', 'Teknik mesin', 'Teknik industri', 'Sains data', 'Televisi dan Film', 'Sistem informasi', 'Hukum', 'Fisioterapi', 'Kesehatan Masyarakat', 'Gizi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Pendidikan Indonesia (UPI)',
                'rank' => 0,
                'jurusan' => ['Pendidikan seni musik', 'Ilmu komunikasi', 'Sastra', 'Bisnis digital', 'Sejarah', 'DKV (Desain Komunikasi Visual)', 'Pendidikan jasmani & olahraga', 'Kepelatihan olahraga', 'Pendidikan Sendratasik', 'Ilmu olahraga', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Manajemen pendidikan', 'Ilmu perpustakaan', 'Psikologi', 'PAI (Pendidikan Agama Islam)', 'Manajemen Industri Katering', 'Pariwisata', 'Geografi', 'Sosiologi', 'Hukum', 'Pendidikan bahasa', 'Biologi', 'Ilmu komputer', 'Pendidikan biologi', 'Gizi', 'Arsitektur', 'Tata boga', 'Tata busana', 'Teknik mesin', 'Teknik sipil', 'Akuntansi', 'Televisi dan Film', 'Seni musik', 'Tari', 'Kedokteran', 'Desain produk', 'Kewirausahaan'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Padjajaran (UNPAD)',
                'rank' => 0,
                'jurusan' => ['Produksi media', 'Ilmu komunikasi', 'Sastra', 'Sosiologi', 'Hukum', 'Ilmu politik', 'Bisnis digital', 'Antropologi', 'Pariwisata', 'Sejarah', 'Ilmu perpustakaan', 'Hubungan internasional', 'Akuntansi', 'Manajemen', 'Kedokteran', 'Biologi', 'Statistika', 'Aktuaria', 'Agroteknologi', 'Agribisnis', 'Teknologi pertanian', 'Geologi', 'Peternakan', 'Farmasi', 'Psikologi', 'Ilmu kelautan', 'Televisi dan Film', 'Kearsipan', 'Administrasi publik'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Trunojoyo Madura (UTM)',
                'rank' => 0,
                'jurusan' => ['Sosiologi', 'Hukum', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Manajemen', 'Akuntansi', 'Ekonomi pembangunan', 'Agroteknologi', 'Agribisnis', 'Teknologi pertanian', 'Ilmu kelautan', 'Manajemen SDA (Sumber Daya Alam)', 'Teknik industri', 'Sistem informasi', 'Teknik mesin', 'Ilmu komunikasi', 'Sastra', 'Psikologi', 'Pendidikan bahasa', 'Ekonomi syariah'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Jenderal Soedirman (UNSOED)',
                'rank' => 0,
                'jurusan' => ['Sastra', 'Sosiologi', 'Ilmu politik', 'Ekonomi pembangunan', 'Pendidikan jasmani & olahraga', 'Hubungan internasional', 'Administrasi perkantoran', 'Agribisnis', 'Biologi', 'Manajemen', 'Akuntansi', 'Hukum', 'Agroteknologi', 'Peternakan', 'Administrasi publik', 'Ilmu komunikasi', 'Teknik sipil', 'Teknik industri', 'Teknik mesin', 'Pendidikan bahasa', 'Statistika', 'Manajemen SDA (Sumber Daya Alam)', 'Ilmu kelautan', 'Kedokteran', 'Kesehatan Masyarakat', 'Gizi', 'Farmasi', 'Teknologi pertanian'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Negeri Jakarta (UNJ)',
                'rank' => 0,
                'jurusan' => ['Pendidikan seni musik', 'Ilmu komunikasi', 'Sastra', 'Sosiologi', 'Manajemen pendidikan', 'Bisnis digital', 'Pariwisata', 'Sejarah', 'Ilmu perpustakaan', 'Pendidikan jasmani & olahraga', 'Kepelatihan olahraga', 'Pendidikan Sendratasik', 'Ilmu olahraga', 'Administrasi perkantoran', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'PAI (Pendidikan Agama Islam)', 'Pendidikan bahasa', 'Tari', 'Biologi', 'Ilmu komputer', 'Pendidikan biologi', 'Statistika', 'Geografi', 'Tata rias', 'Tata busana', 'Tata boga', 'Teknik mesin', 'Sistem informasi', 'Akuntansi', 'Manajemen', 'Psikologi', 'Kesehatan dan Keselamatan Kerja'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Hasanuddin (UNHAS)',
                'rank' => 0,
                'jurusan' => ['Hubungan internasional', 'Ekonomi pembangunan', 'Manajemen', 'Akuntansi', 'Administrasi publik', 'Ilmu politik', 'Sosiologi', 'Ilmu komunikasi', 'Antropologi', 'Peternakan', 'Kehutanan', 'Hukum', 'Kedokteran', 'Psikologi', 'Teknik mesin', 'Teknik sipil', 'Arsitektur', 'Teknik lingkungan', 'Teknik industri', 'Perencanaan wilayah kota', 'Sastra', 'Arkeologi', 'Teknologi pertanian', 'Agroteknologi', 'Biologi', 'Statistika', 'Sistem informasi', 'Aktuaria', 'Kesehatan Masyarakat', 'Gizi', 'Ilmu kelautan', 'Manajemen SDA (Sumber Daya Alam)', 'Farmasi', 'Fisioterapi', 'Pariwisata', 'Agribisnis'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Sumatera Utara (USU)',
                'rank' => 0,
                'jurusan' => ['Etnomusikologi', 'Ilmu komunikasi', 'Kesekretariatan', 'Sastra', 'Sosiologi', 'Hukum', 'Ilmu politik', 'Ekonomi pembangunan', 'Antropologi', 'Sejarah', 'Ilmu perpustakaan', 'Administrasi perkantoran', 'Administrasi publik', 'Kedokteran', 'Akuntansi', 'Pariwisata', 'Statistika', 'Agroteknologi', 'Agribisnis', 'Peternakan', 'Teknologi pertanian', 'Manajemen SDA (Sumber Daya Alam)', 'Ilmu komputer', 'Manajemen', 'Kehutanan', 'Psikologi', 'Teknik sipil', 'Teknik lingkungan', 'Teknik mesin', 'Teknik industri', 'Arsitektur', 'Kesehatan Masyarakat', 'Gizi', 'Biologi', 'Farmasi', 'Kewirausahaan'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Udayana (UNUD)',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Sastra', 'Sosiologi', 'Hukum', 'Ilmu politik', 'Ekonomi pembangunan', 'Antropologi', 'Arkeologi', 'Pariwisata', 'Sejarah', 'Hubungan internasional', 'Fisioterapi', 'Kesehatan Masyarakat', 'Psikologi', 'Kedokteran', 'Teknik mesin', 'Teknik sipil', 'Agribisnis', 'Agroteknologi', 'Akuntansi', 'Manajemen', 'Peternakan', 'Biologi', 'Farmasi', 'Ilmu komputer', 'Teknologi pertanian', 'Ilmu perpustakaan', 'Ilmu kelautan', 'Manajemen SDA (Sumber Daya Alam)'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Sriwijaya (UNSRI)',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Kesekretariatan', 'Sosiologi', 'Ekonomi pembangunan', 'Sejarah', 'Pendidikan jasmani & olahraga', 'Hubungan internasional', 'Teknik sipil', 'Teknik mesin', 'Kedokteran', 'Biologi', 'Agribisnis', 'Teknologi pertanian', 'Pendidikan biologi', 'Kesehatan Masyarakat', 'Arsitektur', 'Ilmu kelautan', 'Sistem informasi', 'Agroteknologi', 'Peternakan', 'Farmasi', 'Psikologi', 'Gizi', 'Hukum', 'Manajemen', 'Akuntansi', 'Pendidikan bahasa', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Manajemen Informatika', 'Perencanaan wilayah kota', 'DKV (Desain Komunikasi Visual)', 'Pendidikan Sendratasik', 'Geografi', 'Teknik industri', 'Sastra', 'Ilmu komputer', 'Ilmu politik'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Sultan Ageng Tirtayasa',
                'rank' => 0,
                'jurusan' => ['Seni pertunjukan', 'Hukum', 'Ekonomi pembangunan', 'Sejarah', 'Pendidikan Sendratasik', 'Ilmu olahraga', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Pendidikan bahasa', 'Pendidikan biologi', 'BK (Bimbingan Konseling)', 'Teknik mesin', 'Teknik industri', 'Teknik sipil', 'Statistika', 'Agribisnis', 'Agroteknologi', 'Akuntansi', 'Manajemen', 'Ekonomi syariah', 'Administrasi publik', 'Ilmu komunikasi', 'Kedokteran', 'Gizi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Andalas (UNAND)',
                'rank' => 0,
                'jurusan' => ['Administrasi perkantoran', 'Hukum', 'Kedokteran', 'Biologi', 'Manajemen', 'Akuntansi', 'Peternakan', 'Farmasi', 'Teknologi pertanian', 'Kesehatan Masyarakat', 'Sejarah', 'Sastra', 'Ilmu komunikasi', 'Sosiologi', 'Antropologi', 'Ilmu politik', 'Hubungan internasional', 'Psikologi', 'Gizi', 'Agribisnis', 'Agroteknologi', 'Teknik lingkungan', 'Teknik mesin', 'Teknik sipil', 'Teknik industri', 'Ilmu komputer', 'Sistem informasi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Negeri Makassar (UNM)',
                'rank' => 0,
                'jurusan' => ['Sosiologi', 'Pendidikan bahasa', 'Administrasi publik', 'Teknik mesin', 'Administrasi perkantoran', 'Pendidikan biologi', 'Geografi', 'Pendidikan jasmani & olahraga', 'Akuntansi', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Manajemen pendidikan', 'Manajemen', 'Sastra', 'Biologi', 'Sejarah', 'Pendidikan Kependudukan dan Lingkungan Hidup', 'Tari', 'Kepelatihan olahraga', 'Ilmu olahraga', 'Statistika', 'Teknologi pertanian', 'Ekonomi pembangunan', 'Psikologi', 'Pendidikan Sendratasik', 'DKV (Desain Komunikasi Visual)', 'Tata busana', 'Antropologi', 'Gizi', 'Arsitektur', 'Bisnis digital', 'Fisioterapi', 'Tata boga', 'Film dan Animasi', 'Kedokteran', 'Aktuaria'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Terbuka (UT)',
                'rank' => 0,
                'jurusan' => ['Manajemen', 'Ekonomi pembangunan', 'Ekonomi syariah', 'Akuntansi', 'Pariwisata', 'Pendidikan bahasa', 'Sastra', 'Pendidikan biologi', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'PAI (Pendidikan Agama Islam)', 'Statistika', 'Biologi', 'Agribisnis', 'Perencanaan wilayah kota', 'Sistem informasi', 'Sains data', 'Kearsipan', 'Administrasi publik', 'Hukum', 'Ilmu komunikasi', 'Ilmu perpustakaan', 'Sosiologi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Muhammadiyah Jakarta (UMJ)',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Hukum', 'Ilmu politik', 'Pendidikan jasmani & olahraga', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Akuntansi', 'Manajemen', 'PAI (Pendidikan Agama Islam)', 'Teknik sipil', 'Arsitektur', 'Teknik mesin', 'Pendidikan bahasa', 'Agroteknologi', 'Administrasi publik', 'Agribisnis', 'Kesehatan Masyarakat', 'Teknik industri', 'Kedokteran', 'Gizi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Muhammadiyah Surakarta (UMS)',
                'rank' => 0,
                'jurusan' => ['Hukum', 'Bisnis digital', 'Ekonomi pembangunan', 'Pendidikan jasmani & olahraga', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Ekonomi syariah', 'PAI (Pendidikan Agama Islam)', 'Akuntansi', 'Manajemen', 'Farmasi', 'Geografi', 'Fisioterapi', 'Gizi', 'Kesehatan Masyarakat', 'Kedokteran', 'Pendidikan bahasa', 'Pendidikan biologi', 'Ilmu komunikasi', 'Sistem informasi', 'Psikologi', 'Arsitektur', 'Teknik industri', 'Teknik mesin', 'Teknik sipil'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Muhammadiyah Yogyakarta (UMY)',
                'rank' => 0,
                'jurusan' => ['Kedokteran', 'Farmasi', 'Hubungan internasional', 'Ilmu komunikasi', 'Pendidikan bahasa', 'Agribisnis', 'Agroteknologi', 'Teknik sipil', 'Teknik mesin', 'Hukum', 'PAI (Pendidikan Agama Islam)', 'Ekonomi syariah', 'Manajemen', 'Akuntansi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Muhammadiyah Malang (UMM)',
                'rank' => 0,
                'jurusan' => ['Sosiologi', 'Hukum', 'Ekonomi pembangunan', 'Hubungan internasional', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Manajemen', 'Akuntansi', 'Ilmu komunikasi', 'Pendidikan biologi', 'Pendidikan bahasa', 'Psikologi', 'Agroteknologi', 'Agribisnis', 'Kehutanan', 'Peternakan', 'Teknik mesin', 'Teknik sipil', 'Teknik industri', 'PAI (Pendidikan Agama Islam)', 'Ekonomi syariah', 'Farmasi', 'Fisioterapi', 'Kedokteran'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Indonesia (UII)',
                'rank' => 0,
                'jurusan' => ['Hukum', 'DKV (Desain Komunikasi Visual)', 'Pendidikan jasmani & olahraga', 'Hubungan internasional', 'Administrasi perkantoran', 'PAI (Pendidikan Agama Islam)', 'Akuntansi', 'Bisnis digital', 'Manajemen', 'Ekonomi pembangunan', 'Psikologi', 'Ilmu komunikasi', 'Pendidikan bahasa', 'Teknik mesin', 'Teknik sipil', 'Arsitektur', 'Teknik lingkungan', 'Statistika', 'Kedokteran'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas PGRI Adi Buana (UNIPA) Surabaya',
                'rank' => 0,
                'jurusan' => ['Kepelatihan olahraga', 'BK (Bimbingan Konseling)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Pendidikan jasmani & olahraga', 'Pendidikan bahasa', 'Biologi', 'Statistika', 'Akuntansi', 'Manajemen', 'Teknik industri', 'Teknik lingkungan', 'Perencanaan wilayah kota', 'Tata busana', 'Tata boga', 'Tata rias', 'Farmasi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Telkom University',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Bisnis digital', 'Pariwisata', 'DKV (Desain Komunikasi Visual)', 'Hubungan internasional', 'Sistem informasi', 'Teknik industri', 'Sains data', 'Manajemen Informatika', 'Akuntansi', 'Psikologi', 'Broadcasting', 'Desain interior', 'Desain produk', 'Seni Kriya', 'Seni rupa murni'],
                'status' => 'Active',
            ],
            [
                'name' => 'BINUS',
                'rank' => 0,
                'jurusan' => ['Ilmu komunikasi', 'Bisnis digital', 'Desain grafis', 'DKV (Desain Komunikasi Visual)', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Akuntansi', 'Desain interior', 'Film dan Animasi', 'Kewirausahaan', 'Ilmu komputer', 'Sistem informasi', 'Teknologi Game', 'Teknik industri', 'Teknik sipil', 'Arsitektur', 'Pariwisata', 'Sastra', 'Hubungan internasional', 'Psikologi', 'Hukum'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Gunadarma',
                'rank' => 0,
                'jurusan' => ['Kedokteran', 'Sistem informasi', 'Farmasi', 'Teknik sipil', 'Desain interior', 'Arsitektur', 'Manajemen', 'Ekonomi syariah', 'Akuntansi', 'Psikologi', 'Teknik mesin', 'Teknik industri', 'Agroteknologi', 'Sastra', 'Pariwisata', 'Ilmu komunikasi', 'Perencanaan keuangan', 'Manajemen Informatika'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Nahdlatul Ulama Surabaya (UNUSA)',
                'rank' => 0,
                'jurusan' => ['Kedokteran', 'Akuntansi', 'Gizi', 'Kesehatan Masyarakat', 'Manajemen', 'Pendidikan bahasa', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Sistem informasi', 'Kesehatan dan Keselamatan Kerja'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Ahmad Dahlan (UAD) Yogyakarta',
                'rank' => 0,
                'jurusan' => ['Akuntansi', 'Sastra', 'BK (Bimbingan Konseling)', 'Biologi', 'Ekonomi pembangunan', 'Farmasi', 'Gizi', 'Hukum', 'Ilmu komunikasi', 'Kedokteran', 'Kesehatan Masyarakat', 'Manajemen', 'PAI (Pendidikan Agama Islam)', 'Pendidikan bahasa', 'Pendidikan biologi', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Psikologi', 'Sistem informasi', 'Teknik industri'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Islam Sultan Agung Semarang',
                'rank' => 0,
                'jurusan' => ['Kedokteran', 'Farmasi', 'Teknik sipil', 'Perencanaan wilayah kota', 'Hukum', 'Pendidikan bahasa', 'Sastra', 'Manajemen', 'Akuntansi', 'PGSD (Pendidikan Guru Sekolah Dasar)', 'Teknik industri', 'Ilmu komunikasi', 'Psikologi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Mercu Buana',
                'rank' => 0,
                'jurusan' => ['Manajemen', 'Desain produk', 'Desain interior', 'DKV (Desain Komunikasi Visual)', 'Arsitektur', 'Teknik industri', 'Teknik mesin', 'Teknik sipil', 'Akuntansi', 'Broadcasting', 'Sistem informasi', 'Psikologi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Universitas Surabaya (UBAYA)',
                'rank' => 0,
                'jurusan' => ['Kedokteran', 'Farmasi', 'Hukum', 'Akuntansi', 'Psikologi', 'Sains data', 'Manajemen Informatika', 'Sistem informasi', 'Teknik industri', 'Teknik mesin', 'Biologi', 'Desain produk', 'DKV (Desain Komunikasi Visual)', 'Bisnis digital', 'Pariwisata'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Elektronika Negeri Surabaya (PENS)',
                'rank' => 0,
                'jurusan' => ['Teknologi Game', 'Sains data'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Negeri Jember',
                'rank' => 0,
                'jurusan' => ['Pariwisata', 'Peternakan', 'Teknologi pertanian', 'Agribisnis'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Negeri Malang (POLINEMA)',
                'rank' => 0,
                'jurusan' => ['Teknik mesin', 'Teknik sipil'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Negeri Bandung',
                'rank' => 0,
                'jurusan' => ['Teknik sipil', 'Teknik mesin', 'Akuntansi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Negeri Jakarta',
                'rank' => 0,
                'jurusan' => ['Teknik mesin', 'Akuntansi', 'Perencanaan keuangan', 'Desain grafis', 'Teknik industri'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Kesehatan (POLTEKKES) Surakarta',
                'rank' => 0,
                'jurusan' => ['Fisioterapi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Kesehatan (POLTEKKES) Surabaya',
                'rank' => 0,
                'jurusan' => ['Gizi'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Kesehatan (POLTEKKES) Malang',
                'rank' => 0,
                'jurusan' => ['Gizi', 'Kesehatan dan Keselamatan Kerja'],
                'status' => 'Active',
            ],
            [
                'name' => 'Politeknik Media Kreatif Negeri Jakarta',
                'rank' => 0,
                'jurusan' => ['Fotografi', 'Teknologi Game', 'Televisi dan Film', 'Film dan Animasi', 'Broadcasting', 'Desain grafis', 'Tata boga', 'Tata busana'],
                'status' => 'Active',
            ],
            [
                'name' => 'Institut Kesenian Jakarta',
                'rank' => 0,
                'jurusan' => ['Etnomusikologi', 'Seni pertunjukan', 'Desain grafis', 'DKV (Desain Komunikasi Visual)', 'Teater/Drama', 'Pendidikan Sendratasik', 'Televisi dan Film', 'Seni musik', 'Tari', 'Seni rupa murni', 'Seni Kriya', 'Desain interior', 'Desain produk'],
                'status' => 'Active',
            ],
            [
                'name' => 'Institut Seni Budaya Indonesia (ISBI) Bandung',
                'rank' => 0,
                'jurusan' => ['Seni pertunjukan', 'Antropologi', 'Teater/Drama', 'Seni Kriya', 'Tari', 'Tata rias', 'Tata busana', 'Televisi dan Film', 'Desain interior', 'DKV (Desain Komunikasi Visual)', 'Seni rupa murni'],
                'status' => 'Active',
            ],
            [
                'name' => 'Insititut Seni Indonesia (ISI) Surakarta',
                'rank' => 0,
                'jurusan' => ['Tari', 'Etnomusikologi', 'Teater/Drama', 'Manajemen Seni', 'Seni Kriya', 'Seni rupa murni', 'Desain interior', 'DKV (Desain Komunikasi Visual)', 'Televisi dan Film', 'Fotografi', 'Film dan Animasi', 'Desain produk', 'Pariwisata'],
                'status' => 'Active',
            ],
            [
                'name' => 'Institut Seni Indonesia (ISI) Yogyakarta',
                'rank' => 0,
                'jurusan' => ['Etnomusikologi', 'Seni pertunjukan', 'DKV (Desain Komunikasi Visual)', 'Teater/Drama', 'Pendidikan Sendratasik', 'Tari', 'Seni musik', 'Penciptaan musik', 'Seni rupa murni', 'Seni Kriya', 'Desain interior', 'Desain produk', 'Manajemen Seni', 'Fotografi', 'Televisi dan Film', 'Film dan Animasi'],
                'status' => 'Active',
            ]
        ];


        foreach ($perguruanTinggi as $resPerguruanTinggi) {
            $perguruanTinggi = PerguruanTinggi::create([
                'name' =>  $resPerguruanTinggi['name'],
                'rank' =>  $resPerguruanTinggi['rank'],
                'status' => $resPerguruanTinggi['status']
            ]);

            $jurusanIds = Jurusan::whereIn('name', $resPerguruanTinggi['jurusan'])->pluck('id');
            $perguruanTinggi->jurusan()->attach($jurusanIds);
        }
    }
}

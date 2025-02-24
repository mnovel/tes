<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pertanyaan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'helpdesk@careertheexplorer.com',
            'password' => bcrypt('@dM1nLog1n!'),
        ]);


        $this->call(SettingSeeder::class);
        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
        // $this->call(IndoRegionDistrictSeeder::class);
        // $this->call(IndoRegionVillageSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(SekolahSeeder::class);
        $this->call(BakatSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(PerguruanTinggiSeeder::class);
        $this->call(ProfesiSeeder::class);
        $this->call(PanduanSeeder::class);
        $this->call(PertanyaanSeeder::class);
        $this->call(SurveiSeeder::class);
    }
}

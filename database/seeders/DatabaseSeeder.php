<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RegionsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CityMunicipalitiesTableSeeder::class);
        $this->call(BarangaysTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CurriculaTableSeeder::class);
    }
}

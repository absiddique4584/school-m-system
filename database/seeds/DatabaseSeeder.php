<?php

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
         $this->call([
             UserTableSeeder::class,
             SliderTableSeeder::class,
             SettingsTableSeeder::class,
             InstitutionsTableSeeder::class,
             AdmissionTableSeeder::class,
             Admission_p_TableSeeder::class,
         ]);
    }
}

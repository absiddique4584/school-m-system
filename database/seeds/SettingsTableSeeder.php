<?php

use Illuminate\Database\Seeder;
use App\Models\Settings;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'logo' => '2020-Jul-Sat.png',
            'image' => '20200704093213.png',
            'app_name' => 'School-M-System',
        ]);
    }
}

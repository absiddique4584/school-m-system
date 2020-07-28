<?php

use Illuminate\Database\Seeder;
use App\Models\Institution;
class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::create([
            'school_name' => 'Dhap Shatgara Baitul Mukarram kamil Madrasha Rangpur Bangladesh',
            'school_reg' => '#3456789011',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'image' => '20200704093049.jpg',
            'status' => $this->getRandomStatus(),
        ]);

        Slider::create([
            'image' => '20200704093017.PNG',
            'status' => $this->getRandomStatus(),
        ]);
        Slider::create([
            'image' => '20200704093034.jpg',
            'status' => $this->getRandomStatus(),
        ]);


    }

    /**
     * @return mixed
     */
    public function getRandomStatus()
    {
        # Generate random status
        $statuses = array('active', 'inactive');
        return $statuses[array_rand($statuses)];
    }

    /**
     * @return mixed
     */

}

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
        foreach (range(1, 3) as $index) {
            Slider::create([
                'image'     => $this->getRandomImage(),
                'status'    => $this->getRandomStatus()
            ]);
        }
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
    public function getRandomImage()
    {
        # Generate random image
        $image = array('hero.jpg', 'smart.jpg', 'smart3.jpg');
        return $image[array_rand($image)];
    }
}

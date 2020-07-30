<?php

use Illuminate\Database\Seeder;
use App\Models\SubjectsOne;
class SubjectsOneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,12)as $index){
            SubjectsOne::create([
                'image' =>$this->getRandomImage(),
                'sub_name'=>$faker->word,
                'teacher' =>$faker->word,

            ]);
        }
    }


    public function getRandomImage(){
        $images = array('book1.jpg','book2.jpg','book3.jpg');
        return $images[array_rand($images)];
    }
}

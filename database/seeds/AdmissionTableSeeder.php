<?php

use Illuminate\Database\Seeder;
use App\Models\Admission;
class AdmissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,30)as $index){
            Admission::create([
                //'admit_id'=>$faker->unique()->numberBetween(1,30),
                'name'=>$faker->word,
                'p_school' =>$faker->sentence,
                's_phone' =>$this->getRandomPhone(),
                's_email' =>$faker->email,
                'd_birth' =>$faker->date(),
                'p_birth' =>$faker->word,
                'class' =>$this->getRandomClass(),
                'image' =>$this->getRandomImage(),
            ]);
        }
    }
    public function getRandomClass(){
        $classes = array('one', 'two','three','four','five','six','seven','eight','nine','ten','eleven','twelve',);
        return $classes[array_rand($classes)];
    }

    public function getRandomPhone(){
        $phones = array('01738254983','01521467050','01738254982','01738254981',);
        return $phones[array_rand($phones)];
    }

    public function getRandomImage(){
        $images = array('demo.png','hero.jpg','hero2.JPG');
        return $images[array_rand($images)];
    }
}

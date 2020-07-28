<?php

use Illuminate\Database\Seeder;
use App\Models\Admission_p_part;

class Admission_p_TableSeeder extends Seeder
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
            Admission_p_part::create([
                'admission_id'=>$faker->unique()->numberBetween(1,30),
                'this_class'=> $this->getRandomThisClass(),
                'm_name'=>$faker->word,
                'm_phone' =>$this->getRandom_m_Phone(),
                'f_name' =>$faker->word,
                'f_phone' =>$this->getRandom_f_Phone(),
                'm_situation' =>$faker->sentence,
                'address' =>$faker->paragraph,
                'p_address' =>$faker->sentence,
            ]);
        }
    }

    public function getRandom_m_Phone(){
        $phones = array('01738254983','01521467050','01738254982','01738254981',);
        return $phones[array_rand($phones)];
    }
    public function getRandom_f_Phone(){
        $f_phones = array('01738254983','01521467050','01738254982','01738254981',);
        return $f_phones[array_rand($f_phones)];
    }
    public function getRandomThisClass(){
        $classes = array('one', 'two','three','four','five','six','seven','eight','nine','ten','eleven','twelve',);
        return $classes[array_rand($classes)];
    }


}

<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Principal',
                'email'=>'principal@gmail.com',
                'is_admin'=>'1',
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'Ast-Principal',
                'email'=>'ast-principal@gmail.com',
                'is_admin'=>'0',
                'password'=> bcrypt('12345678'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

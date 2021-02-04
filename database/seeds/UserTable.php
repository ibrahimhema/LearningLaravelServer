<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $faker=Faker::create();

     $eremail=['ibrahim@gmail.com','ibrahim2@gmail.com','ibrahim3@gmail.com','ibrahim4@gmail.com'];
        for($i=0;$i<10;$i++){
            $arr=['name'=> $faker->word,
                'email'=>$faker->email
                , 'password'=>\Illuminate\Support\Facades\Hash::make('123456789')

                ,'admin'=>rand(0,1)



            ];


            \App\User::create($arr);
        }
    }
}

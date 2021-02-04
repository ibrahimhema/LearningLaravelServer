<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class BuTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();


        $arrplace=['ابانوب','الاباديري','القوصية','الزاويه'];
        for($i=0;$i<10;$i++){
            $arr=['bu_name'=> $faker->word,
                'bu_price'=>$faker->numberBetween(500,200000)
                ,'bu_rent'=>rand(0,1)
                ,'bu_square'=>$faker->numberBetween(50,2000)
                ,'user_id'=>$i+1
                ,'bu_type'=>rand(0,2)
                ,'bu_image'=>'noimage.png'
                ,'bu_small_dis'=>$faker->word
                ,'bu_meta'=>$faker->paragraph
                ,'bu_long_dis'=>$faker->paragraph
                ,'bu_langtiude'=>$faker->numberBetween(100000,200000)
                ,'bu_latitude'=>$faker->numberBetween(100000,200000)
                ,'bu_status'=>1
                ,'bu_rooms'=>rand(1,11)
                ,'bu_place'=>$arrplace[rand(0,3)]


            ];


            \App\Bu::create($arr);
        }
    }
}

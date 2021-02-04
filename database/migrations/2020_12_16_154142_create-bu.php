<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('bu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bu_name');
            $table->char('bu_price',20);
            $table->tinyInteger('bu_rent');
            $table->char('bu_square',10);
            $table->tinyInteger('bu_type');
            $table->string('bu_small_dis');
             $table->text('bu_meta');
              $table->char('bu_langtiude',50);
               $table->char('bu_latitude',50);
                $table->text('bu_long_dis');
                  $table->tinyInteger('bu_status');
           $table->string('bu_place');
           $table->string('bu_image');
           $table->bigInteger('bu_rooms');
                  $table->unsignedBigInteger('user_id');

            $table->timestamps();

        });
        Schema::table('bu', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bu');
    }
}

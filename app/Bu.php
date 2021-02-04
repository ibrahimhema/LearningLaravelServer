<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $table="bu";
    protected $fillable=['bu_name','bu_price','bu_rent','bu_square','bu_type','bu_small_dis','bu_meta','bu_langtiude','bu_latitude','bu_long_dis','bu_status','bu_status','user_id','bu_rooms','bu_place','bu_image'];
    //
}

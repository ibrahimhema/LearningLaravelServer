<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BulldingRequest extends Model
{
 protected $table="bulldingrequests";
 protected $fillable=['user_id','bu_id','stutues'];
 public function bu(){
     return $this->belongsTo('App\Bu','bu_id');
 }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table="siteSettings";
    protected $fillable=['slug','settingname','value','type'];
    //
}

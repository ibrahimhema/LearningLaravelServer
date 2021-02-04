<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
 protected $table="contacts";
 protected $fillable=['contact_name','contact_email','contact_type','contact_message','contact_view'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable=['user_name','user_contact','user_mail','image','dpt_name','user_pass'];
    protected $table= "user_infos";
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    protected $fillable=['user_name','user_contact','gender','dpt_name','user_pass'];
    protected $table= "libraries";
}

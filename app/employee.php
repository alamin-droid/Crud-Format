<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable=['user_name','user_contact','user_pass','dpt_name'];
    protected $table= "employees";
}

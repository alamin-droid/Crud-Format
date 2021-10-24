<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
   protected $fillable=['client_name','account_number','client_number','client_address','verification_type','verification_number','client_picture','mail_id','client_password'];
   protected $table='banks';
}

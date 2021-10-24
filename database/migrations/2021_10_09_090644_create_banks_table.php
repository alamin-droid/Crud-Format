<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{

    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('client_number')->nullable();
            $table->string('client_address')->nullable();
            $table->string('verification_type')->nullable();
            $table->string('verification_number')->nullable();
            $table->string('client_picture')->nullable();
            $table->string('mail_id')->nullable();
            $table->string('client_password')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('banks');
    }
}

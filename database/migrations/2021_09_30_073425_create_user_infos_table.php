<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{

    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name')->nullable();
            $table->string('user_contact')->nullable();
            $table->unique('user_mail')->nullable();
            $table->string('image')->nullable();
            $table->string('dpt_name')->nullable();
            $table->string('user_pass')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}

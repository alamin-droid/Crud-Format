<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{

    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('user_name')->nullable();
            $table->string('user_contact')->nullable();
            $table->string('gender')->nullable();
            $table->text('dpt_name')->nullable();
            $table->string('user_pass')->nullable();
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{

    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name')->nullable();
            $table->text('dpt_name')->nullable();
            $table->string('user_contact')->nullable();
            $table->string('user_pass')->nullable();
            $table->timestamps();
        });
    }

    function down()
    {
        Schema::dropIfExists('employees');
    }
}

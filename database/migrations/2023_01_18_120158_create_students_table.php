<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("last_name");
            $table->string("grand_name");
            $table->string("mother_last_name");
            $table->string("birthday_date");
            $table->string("birthday_place");
            $table->bigInteger("phone");
            $table->string("gender");
            $table->string("nationality");
            $table->string("current_place");
            $table->string("class");
            $table->string("add_date");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

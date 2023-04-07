<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("class");
            $table->string("teacher_name");
            $table->string("type");
            $table->string("unit_number")->nullable();
            $table->string("path")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reference');
    }
}

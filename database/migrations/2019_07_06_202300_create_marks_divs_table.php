<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksDivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks_divs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mid');
            $table->integer('internal');
            $table->integer('final');
            $table->integer('practical');
            $table->integer('total');
            $table->string('credit_hours')->unique();
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
        Schema::dropIfExists('marks_divs');
    }
}

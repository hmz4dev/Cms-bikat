<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferedCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offered_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('degree');
            $table->string('semester');
            $table->string('course_code');
            $table->string('course_name');
            $table->string('credit_hours');
            $table->integer('mid')->nullable();
            $table->integer('internal')->nullable();
            $table->integer('final')->nullable();
            $table->integer('practical')->nullable();
            $table->integer('total')->nullable();
            $table->string('course_group');
            $table->string('pre_req')->nullable();
            $table->string('section');
            $table->string('course_incharge');
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
        Schema::dropIfExists('offered_courses');
    }
}

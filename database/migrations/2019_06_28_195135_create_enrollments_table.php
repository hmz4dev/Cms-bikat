<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('enrolldate');
            $table->integer('enrollsemester');
            $table->string('session');
            $table->string('degree');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('Regno');
            $table->string('section');
            $table->string('approval');
            $table->string('course_work');
            $table->string('synopsis');
            $table->string('after_ceased');
            $table->string('chalan_no');
            $table->string('chalan_amount');
            $table->string('Remarks');
            $table->string('enroll_status');
            $table->string('Course_name');
            $table->string('course_type');
            $table->string('course_status');
            $table->string('credit_hours');
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
        Schema::dropIfExists('enrollments');
    }
}

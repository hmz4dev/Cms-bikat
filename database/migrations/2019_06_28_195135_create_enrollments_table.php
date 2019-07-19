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
            $table->date('enrolldate')->default(date("Y-m-d H:i:s"));
            $table->string('enrollsemester');
            $table->string('session');
            $table->string('degree');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('Regno');
            $table->string('section');
            $table->string('approval')->nullable();
            $table->string('course_work')->nullable();
            $table->string('synopsis')->nullable();
            $table->string('after_ceased')->nullable();
            $table->string('chalan_no')->nullable();
            $table->string('chalan_amount')->nullable();
            $table->string('Remarks')->nullable();
            $table->string('enroll_status');
            $table->string('course_code');
            $table->string('course_name');
            $table->string('course_type')->nullable();
            $table->string('course_status')->nullable();
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

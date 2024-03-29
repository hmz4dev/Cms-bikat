<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentinfos', function (Blueprint $table) {
            $table->bigIncrements('st_id');
            $table->string('status');
            $table->string('session');           
            $table->integer('semester');
            $table->string('degree');
            $table->string('shift');
            $table->string('urban_rural');
            $table->string('decipline');
            $table->string('domicile');
            $table->string('seat_type');
            $table->string('image')->nullable();
            $table->string('gender');
            $table->string('name');
            $table->string('st_cnic')->unique();
            $table->date('dob');
            $table->string('reg_no')->unique()->index();
            $table->string('previous_degree')->nullable();
            $table->string('section');
            $table->string('father_name');
            $table->biginteger('father_income')->nullable();
            $table->string('father_cnic');
            $table->string('father_occupation')->nullable();
            $table->string('nationality');
            $table->string('religion');
            $table->string('telephone')->nullable();
            $table->string('cellno');
            $table->string('email')->nullable();
            $table->string('city');
            $table->string('temporary_address');
            $table->string('permanent_address');
            $table->string('test')->nullable();
            $table->date('dot')->nullable();
            $table->biginteger('marks')->nullable();
            $table->string('guardian');
            $table->string('relation');
            $table->string('guardian_phone');
            $table->string('emergency_person');
            $table->string('emergency_tel')->nullable();
            $table->string('emergency_cell')->nullable();
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
        Schema::dropIfExists('studentinfos');
    }
}

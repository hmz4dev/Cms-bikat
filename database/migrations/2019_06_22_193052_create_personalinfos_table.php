<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('St_id');
            $table->string('blood_group')->nullable();
            $table->string('martial_status');
            $table->string('family_doctor')->nullable();
            $table->string('hostel_required');
            $table->string('transport_required');
            $table->string('hostel_granted');
            $table->string('transport_granted');
            $table->string('addmission_granted');
            $table->string('hobbies');
            $table->string('ailment')->nullable();
            $table->string('influence_person')->nullable();
            $table->string('faculity_hec')->nullable();
            $table->string('personality_point')->nullable();
            $table->string('foriegn_visit')->nullable();
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
        Schema::dropIfExists('personalinfos');
    }
}

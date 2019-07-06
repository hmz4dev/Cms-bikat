<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualificationinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('st_id')->usigned();
            $table->string('degree')->default('1');
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->string('institute_attended')->default('1');
            $table->string('uni_board')->default('1');
            $table->integer('obtain_marks')->default('1');
            $table->integer('total_marks')->default('1');
            $table->float('percentage')->default('1');
            $table->char('grade')->default('1');
            $table->float('cgpa')->default('1');
            $table->string('marit')->default('1');
            $table->string('doc_checklist')->default('1');
            $table->integer('copies')->default('1');
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
        Schema::dropIfExists('qualificationinfos');
    }
}

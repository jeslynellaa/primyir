<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_healths', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('schoolyear_id');

            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('height2');
            $table->integer('bmi2');
            $table->string('bmi_category');
            $table->string('hfa');
            $table->string('remarks', 1000)->nullable();

            $table->timestamps();

            $table->index('student_id');
            $table->index('section_id');
            $table->index('schoolyear_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_healths');
    }
}

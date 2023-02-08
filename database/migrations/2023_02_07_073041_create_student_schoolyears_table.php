<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSchoolyearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_schoolyears', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('schoolyear_id');
            $table->unsignedBigInteger('student_id');
            $table->string('status', 50);

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
        Schema::dropIfExists('student_schoolyears');
    }
}

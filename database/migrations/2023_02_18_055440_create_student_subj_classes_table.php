<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subj_classes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('subject_class_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('student_schoolyear_id');

            $table->timestamps();

            $table->index('subject_class_id');
            $table->index('student_id');
            $table->index('student_schoolyear_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_subj_classes');
    }
}

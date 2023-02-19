<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subj_grades', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('student_subj_class_id');
            $table->integer('first_grading')->nullable();
            $table->integer('second_grading')->nullable();
            $table->integer('third_grading')->nullable();
            $table->integer('fourth_grading')->nullable();
            $table->integer('gen_ave')->nullable();
            $table->string('remarks', 50)->nullable();

            $table->timestamps();

            $table->index('student_subj_class_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_subj_grades');
    }
}

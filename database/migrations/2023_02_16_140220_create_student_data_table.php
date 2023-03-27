<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('student_id');
            
            $table->string('mother_tongue', 30);
            $table->string('IP_ethnicGroup', 30)->nullable();

            $table->string('father_givenName', 50);
            $table->string('father_middleName', 50)->nullable();
            $table->string('father_lastName', 50);

            $table->string('mother_givenName', 50);
            $table->string('mother_middleName', 50)->nullable();
            $table->string('mother_lastName', 50);
            
            $table->string('guardian_givenName', 50)->nullable();
            $table->string('guardian_middleName', 50)->nullable();
            $table->string('guardian_lastName', 50)->nullable();
            $table->string('guardian_relationship', 30)->nullable();
            
            $table->string('parent_guardian_contactNo', 20)->nullable();
            
            $table->timestamps();

            $table->index('student_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_data');
    }
}

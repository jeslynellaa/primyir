<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('LRN_no', 12);
            $table->unsignedBigInteger('section_id')->nullable();
            $table->string('religion', 50);
            $table->unsignedBigInteger('curriculum_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->index('user_id');
            $table->index('section_id');
            $table->index('curriculum_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

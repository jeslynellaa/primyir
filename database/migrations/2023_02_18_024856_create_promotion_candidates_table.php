<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('schoolyear_id');

            $table->integer('gen_average');
            $table->string('action_taken', 50);
            $table->string('failed_areas', 200)->nullable();

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
        Schema::dropIfExists('promotion_candidates');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('schoolyear_id');

            $table->string('month_name', 20);
            $table->date('date');
            $table->string('attendance', 20);   // attendance property will either be 'Absent', 'Late' or 'Cutting'
                                                // dates that are not included means the student was present
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
        Schema::dropIfExists('attendances');
    }
}

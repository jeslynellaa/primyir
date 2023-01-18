<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('street')->nullable();
            $table->unsignedBigInteger('barangay')->nullable();
            $table->unsignedBigInteger('city')->nullable();
            $table->unsignedBigInteger('province')->nullable();
            $table->unsignedBigInteger('region')->nullable();
            $table->timestamps();

            $table->index('user_id');
            $table->index('barangay');
            $table->index('city');
            $table->index('province');
            $table->index('region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}

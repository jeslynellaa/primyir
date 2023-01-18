<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_municipalities', function (Blueprint $table) {
            $table->integer('id');
            $table->string('psgcCode');
            $table->string('name');
            $table->integer('region_code');
            $table->integer('province_code');
            $table->integer('code')->primary();

            $table->index('province_code');
            $table->foreign('province_code')
                ->references('code')
                ->on('provinces')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_municipalities');
    }
}

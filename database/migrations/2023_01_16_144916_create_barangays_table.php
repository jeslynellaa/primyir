<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangays', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('code')->primary();
            $table->string('name');
            $table->integer('region_code');
            $table->integer('province_code');
            $table->integer('city_code');

            $table->index('city_code');
            $table->foreign('city_code')
                ->references('code')
                ->on('city_municipalities')
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
        Schema::dropIfExists('barangays');
    }
}

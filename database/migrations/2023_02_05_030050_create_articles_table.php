<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title', 1000);
            $table->string('category', 100);
            $table->string('author', 100);
            $table->binary('thumbnail')->nullable();
            $table->string('img', 200)->nullable();
            $table->mediumText('content');
            $table->date('date_posted');
            $table->unsignedBigInteger('admin_id');

            $table->timestamps();

            $table->index('admin_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFashionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fashion_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thumbnail_id')->unsigned()->nullable();
            $table->foreign('thumbnail_id')->references('id')->on('thumbnails');
            $table->string('artist')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('media')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fashion_models');
    }
}

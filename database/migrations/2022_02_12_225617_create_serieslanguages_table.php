<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serieslanguages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('languageId');
            $table->unsignedInteger('serieId');
            $table->string('type')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('languageId')
                ->references('id')
                ->on('languages')
                ->onDelete('cascade');
            $table->foreign('serieId')
                ->references('id')
                ->on('series')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serieslanguages');
    }
}

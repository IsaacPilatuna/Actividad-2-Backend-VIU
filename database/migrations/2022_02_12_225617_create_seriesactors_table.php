<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seriesactors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('actorId');
            $table->unsignedInteger('serieId');
            $table->foreign('actorId')
                ->references('id')
                ->on('actors')
                ->onDelete('cascade');
            $table->foreign('serieId')
                ->references('id')
                ->on('series')
                ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seriesactors');
    }
}

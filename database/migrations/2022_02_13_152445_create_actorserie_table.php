<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorserieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actorserie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idActor');
            $table->integer('idSerie');
            $table->foreign('idActor')
                ->references('id')
                ->on('actors')
                ->onDelete('set null');
            $table->foreign('idSerie')
                ->references('id')
                ->on('serie')
                ->onDelete('set null');

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
        Schema::dropIfExists('actorserie');
    }
}

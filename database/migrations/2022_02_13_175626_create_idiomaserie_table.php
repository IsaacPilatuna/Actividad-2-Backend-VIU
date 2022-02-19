<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdiomaserieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomaserie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idIdioma');
            $table->integer('idSerie');
            $table->string('tipo');
            $table->timestamps();
            $table->foreign('idIdioma')
                ->references('id')
                ->on('idioma')
                ->onDelete('set null');
            $table->foreign('idSerie')
                ->references('id')
                ->on('serie')
                ->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('idiomaserie');
    }
}

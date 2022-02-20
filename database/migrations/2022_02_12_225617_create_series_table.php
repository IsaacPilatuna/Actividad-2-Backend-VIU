<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable(false);
            $table->unsignedInteger('platformId');
            $table->unsignedInteger('directorId');
            $table->timestamps();
            $table->foreign('platformId')
                ->references('id')
                ->on('platforms')
                ->onDelete('cascade');
            $table->foreign('directorId')
                ->references('id')
                ->on('directors')
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
        Schema::dropIfExists('series');
    }
}

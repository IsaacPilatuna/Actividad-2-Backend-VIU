<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesActorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('SeriesActors')->delete();

        DB::table('SeriesActors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'actorId' => 1,
                'serieId' => 1,
                'created_at' => '2022-02-21 02:32:21',
                'updated_at' => '2022-02-21 02:32:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'actorId' => 3,
                'serieId' => 1,
                'created_at' => '2022-02-21 02:32:21',
                'updated_at' => '2022-02-21 02:32:21',
                'deleted_at' => NULL,
            ),
        ));


    }
}

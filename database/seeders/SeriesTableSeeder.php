<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('Series')->delete();

        DB::table('Series')->insert(array (
            0 =>
            array (
                'id' => 4,
                'title' => 'Los juegos del hambre',
                'platformId' => 1,
                'directorId' => 2,
                'created_at' => '2022-02-21 02:32:21',
                'updated_at' => '2022-02-21 02:32:21',
                'deleted_at' => NULL,
            ),
        ));


    }
}

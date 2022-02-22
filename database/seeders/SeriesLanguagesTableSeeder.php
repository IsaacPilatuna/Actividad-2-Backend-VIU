<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesLanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('SeriesLanguages')->delete();

        DB::table('SeriesLanguages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'languageId' => 2,
                'serieId' => 1,
                'type' => 'Audio',
                'created_at' => '2022-02-21 02:32:21',
                'updated_at' => '2022-02-21 02:32:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'languageId' => 2,
                'serieId' => 1,
                'type' => 'Subtítulo',
                'created_at' => '2022-02-21 02:32:21',
                'updated_at' => '2022-02-21 02:32:21',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'languageId' => 3,
                'serieId' => 1,
                'type' => 'Subtítulo',
                'created_at' => '2022-02-21 02:32:21',
                'updated_at' => '2022-02-21 02:32:21',
                'deleted_at' => NULL,
            ),
        ));


    }
}

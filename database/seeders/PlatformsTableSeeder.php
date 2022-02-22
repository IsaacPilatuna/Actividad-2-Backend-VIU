<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('Platforms')->delete();

        DB::table('Platforms')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Netflix',
                'created_at' => '2022-02-20 19:46:41',
                'updated_at' => '2022-02-21 05:54:47',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Diney+',
                'created_at' => '2022-02-20 20:48:10',
                'updated_at' => '2022-02-20 20:48:10',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Twitch',
                'created_at' => '2022-02-20 20:52:25',
                'updated_at' => '2022-02-20 20:52:25',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Youtube',
                'created_at' => '2022-02-20 21:09:26',
                'updated_at' => '2022-02-20 21:09:26',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Online TV',
                'created_at' => '2022-02-21 03:34:45',
                'updated_at' => '2022-02-21 03:34:45',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'CrunchyRoll',
                'created_at' => '2022-02-21 03:35:00',
                'updated_at' => '2022-02-21 03:35:00',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Amazon Prime',
                'created_at' => '2022-02-21 03:45:03',
                'updated_at' => '2022-02-21 03:45:03',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Sky TV',
                'created_at' => '2022-02-21 03:45:09',
                'updated_at' => '2022-02-21 03:45:09',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Movistar+',
                'created_at' => '2022-02-21 03:45:15',
                'updated_at' => '2022-02-21 03:45:15',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'FILMIN',
                'created_at' => '2022-02-21 03:45:21',
                'updated_at' => '2022-02-21 03:45:21',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Crackle',
                'created_at' => '2022-02-21 03:45:41',
                'updated_at' => '2022-02-21 03:45:41',
                'deleted_at' => NULL,
            ),
        ));


    }
}

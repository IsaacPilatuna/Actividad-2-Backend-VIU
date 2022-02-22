<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('Languages')->delete();

        DB::table('Languages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Español',
                'isoCode' => 'ES',
                'created_at' => '2022-02-20 22:11:16',
                'updated_at' => '2022-02-20 22:13:16',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Inglés',
                'isoCode' => 'EN',
                'created_at' => '2022-02-20 22:13:25',
                'updated_at' => '2022-02-20 22:13:25',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Japonés',
                'isoCode' => 'JP',
                'created_at' => '2022-02-21 03:48:32',
                'updated_at' => '2022-02-21 03:48:32',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Chino',
                'isoCode' => 'CH',
                'created_at' => '2022-02-21 03:48:39',
                'updated_at' => '2022-02-21 03:48:39',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Ruso',
                'isoCode' => 'RU',
                'created_at' => '2022-02-21 03:48:46',
                'updated_at' => '2022-02-21 03:48:46',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Alemán',
                'isoCode' => 'AL',
                'created_at' => '2022-02-21 03:49:03',
                'updated_at' => '2022-02-21 07:08:03',
                'deleted_at' => NULL,
            ),
        ));


    }
}

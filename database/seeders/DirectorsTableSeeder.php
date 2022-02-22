<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('Directors')->delete();

        DB::table('Directors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'firstName' => 'Guillermo',
                'lastName' => 'del Toro',
                'dateOfBirth' => '1964-10-09',
                'nationality' => 'Mexicano',
                'created_at' => '2022-02-20 21:57:57',
                'updated_at' => '2022-02-20 21:57:57',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'firstName' => 'Steven',
                'lastName' => 'Spielberg',
                'dateOfBirth' => '1946-12-18',
                'nationality' => 'Estadounidense',
                'created_at' => '2022-02-20 21:58:37',
                'updated_at' => '2022-02-20 21:58:37',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'firstName' => 'Alfred',
                'lastName' => 'Hitchcock',
                'dateOfBirth' => '1899-08-13',
                'nationality' => 'Inglés',
                'created_at' => '2022-02-20 21:58:58',
                'updated_at' => '2022-02-20 21:58:58',
                'deleted_at' => NULL,
            ),
        ));


    }
}

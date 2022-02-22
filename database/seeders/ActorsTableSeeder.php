<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('Actors')->delete();

        DB::table('Actors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'firstName' => 'Scarlet',
                'lastName' => 'Johanson',
                'dateOfBirth' => '1971-06-06',
                'nationality' => 'Estadounidense',
                'created_at' => '2022-02-20 21:03:24',
                'updated_at' => '2022-02-20 21:18:25',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'firstName' => 'Johnny',
                'lastName' => 'Depp',
                'dateOfBirth' => '1963-06-09',
                'nationality' => 'Estadounidense',
                'created_at' => '2022-02-20 22:47:13',
                'updated_at' => '2022-02-20 22:47:13',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'firstName' => 'Dwayne',
                'lastName' => 'Johnson',
                'dateOfBirth' => '1972-05-02',
                'nationality' => 'Estadounidense',
                'created_at' => '2022-02-20 22:47:29',
                'updated_at' => '2022-02-20 22:47:29',
                'deleted_at' => NULL,
            ),
        ));


    }
}

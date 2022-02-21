<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ActorsSeeder::class,
            DirectorsSeeder::class,
            LanguagesSeeder::class,
            PlatformsSeeder::class,
            SeriesSeeder::class,
            SeriesActorsSeeder::class,
            SeriesLanguagesSeeder::class,
            UsersSeeder::class
        ]);
    }
}

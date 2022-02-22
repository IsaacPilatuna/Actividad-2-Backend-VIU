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
            ActorsTableSeeder::class,
            DirectorsTableSeeder::class,
            LanguagesTableSeeder::class,
            PlatformsTableSeeder::class,
            SeriesTableSeeder::class,
            SeriesActorsTableSeeder::class,
            SeriesLanguagesTableSeeder::class,
            UsersSeeder::class
        ]);
        $this->call(ActorsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(PlatformsTableSeeder::class);
        $this->call(SeriesActorsTableSeeder::class);
        $this->call(SeriesLanguagesTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
    }
}

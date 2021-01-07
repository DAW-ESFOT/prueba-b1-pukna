<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            Movie::create([
                'name' => $faker->word,
                'code' => $faker->uuid,
                'year' => $faker->numberBetween(1900,2020),
                'available' => $faker->boolean,
                'genre_id' => $faker->numberBetween(1, 5)


            ]);
        }
    }
}

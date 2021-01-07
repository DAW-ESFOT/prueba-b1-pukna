<?php

use App\Genre;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        User::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'document' => $faker->phoneNumber,
                ]);
            $user->genres()->saveMany(
                $faker->randomElements(
                    array(
                        Genre::find(1),
                        Genre::find(2),
                        Genre::find(3),
                        Genre::find(4),
                        Genre::find(5)),
                    $faker->numberBetween(1, 5), false));
        }
    }
}

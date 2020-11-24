<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\City::query()->delete();

        $faker = Faker\Factory::create();

        foreach(range(1, 100) as $number) {
            \App\City::create([
                'name' => $faker->city,
                'state' => $faker->state,
                'population_2010' => $faker->numberBetween(100, 500000),
                'population_rank' => $number
            ]);
        }
    }
}

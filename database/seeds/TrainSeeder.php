<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;


class TrainSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $train = new Train();
            $train->society = $faker->words(2,true);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->train_id = $faker->regexify('[A-Z]{3}[0-9]{4}');
            $train->wagons = $faker->numberBetween(1,8);
            $train->on_time = $faker->boolean();
            $train->canceled = $faker->boolean();

            $train->save();
        }
    }
}

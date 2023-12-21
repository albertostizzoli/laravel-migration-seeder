<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure = $faker->time();
            $newTrain->arrived = $faker->time();
            $newTrain->train_code = $faker->numberBetween(10000, 99999);
            $newTrain->number_carriages = $faker->numberBetween(1, 9);
            $newTrain->in_time = $faker->randomElement([true, false]);
            $newTrain->deleted = $faker->randomElement([true, false]);
            $newTrain->save();

        }

    }
}

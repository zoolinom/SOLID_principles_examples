<?php

use App\Sale;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $item) {
            Sale::create([
                'description' => $faker->sentence(),
                'charge' => $faker->numberBetween(100, 9000)
            ]);
        }
    }
}

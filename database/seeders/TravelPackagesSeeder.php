<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TravelPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('travel_packages')->insert([
                'destination' => $faker->city,
                'description' => $faker->paragraph,
                'start_date' => $faker->date,
                'end_date' => $faker->date,
                'price' => $faker->randomFloat(2, 100, 5000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

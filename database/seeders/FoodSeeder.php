<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FoodSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            DB::table('foods')->insert([
                'name' => $faker->words(3, true),
                'nutrition_fact' => "Kalori: " . $faker->numberBetween(300, 600) . " kkal\n"
                                    . "Protein: " . $faker->numberBetween(20, 50) . " gram\n"
                                    . "Lemak: " . $faker->numberBetween(10, 30) . " gram\n"
                                    . "Karbohidrat: " . $faker->numberBetween(40, 80) . " gram\n"
                                    . "Serat: " . $faker->numberBetween(3, 10) . " gram",
                'description' => $faker->sentence(10),
                'price' => $faker->numberBetween(20000, 50000),
                'category_id' => $faker->numberBetween(1, 12),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

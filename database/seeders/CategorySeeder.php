<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Appetizer'],
            ['name' => 'Main Course'],
            ['name' => 'Dessert'],
            ['name' => 'Beverage'],
            ['name' => 'Snack'],
            ['name' => 'Salad'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'John Doe'],
            ['name' => 'Jane Smith'],
            ['name' => 'Alice Johnson'],
            ['name' => 'Bob Brown'],
            ['name' => 'Charlie Davis'],
            ['name' => 'Eve Wilson']
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($number = 1; $number < 7; $number++) {
            DB::table('genres')->insert([
                'title' => "Gorgeous genre number $number",
                'description' => 'Gorgeous description'
            ]);
        }
    }
}

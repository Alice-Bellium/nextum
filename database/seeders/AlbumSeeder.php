<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($number = 1; $number < 12; $number++) {
            DB::table('albums')->insert([
                'title' => "Gorgeous album number $number",
                'compositions' => 11,
                'content' => 'Gorgeous content'
            ]);
        }
    }
}

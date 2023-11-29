<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($number = 1; $number < 12; $number++) {
            DB::table('album_genre')->insert([
                'album_id' =>  $number,
                'genre_id' =>  1,
            ]);
        }
    }
}

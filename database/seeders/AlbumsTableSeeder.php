<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = [

            [
                'name' => 'Shape & Form (Deluxe)',
                'published_year' => 2022,
                'n_songs' => 17,
            ],
            [
                'name' => 'Shape & Form',
                'published_year' => 2022,
                'n_songs' => 14,
            ],
            [
                'name' => 'Max Maco Is Dead Right?',
                'published_year' => 2021,
                'n_songs' => 13,
            ],
            [
                'name' => 'Pink',
                'published_year' => 2020,
                'n_songs' => 13,
            ],
            [
                'name' => 'A 20 Something Fuck',
                'published_year' => 2018,
                'n_songs' => 8,
            ]
        ];

        foreach ($albums as $album) {
            $newAlbum = new Album();

            $newAlbum->name = $album['name'];
            $newAlbum->published_year = $album['published_year'];
            $newAlbum->n_songs = $album['n_songs'];

            $newAlbum->save();
        }
    }
}

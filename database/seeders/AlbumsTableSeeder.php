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
                'name' => '',
                'published_year' => '',
                'n_songs' => '',
            ],
            [
                'name' => '',
                'published_year' => '',
                'n_songs' => '',
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

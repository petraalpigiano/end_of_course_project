<?php

namespace Database\Seeders;

use App\Models\Ep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eps = [
            [
                'name' => 'Before Everything Changes',
                'published_year' => 2023,
                'n_songs' => 5,
            ],
            [
                'name' => 'Momentum',
                'published_year' => 2017,
                'n_songs' => 4,
            ],
            [
                'name' => 'First Steps',
                'published_year' => 2016,
                'n_songs' => 4,
            ]
        ];

        foreach ($eps as $ep) {
            $newEp = new Ep();

            $newEp->name = $ep['name'];
            $newEp->published_year = $ep['published_year'];
            $newEp->n_songs = $ep['n_songs'];

            $newEp->save();
        }
    }
}

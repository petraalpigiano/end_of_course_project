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

        foreach ($eps as $ep) {
            $newEp = new Ep();

            $newEp->name = $ep['name'];
            $newEp->published_year = $ep['published_year'];
            $newEp->n_songs = $ep['n_songs'];

            $newEp->save();
        }
    }
}

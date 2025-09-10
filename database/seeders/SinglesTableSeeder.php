<?php

namespace Database\Seeders;

use App\Models\Single;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SinglesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $singles = [
            [
                'name' => '',
                'published_year' => '',
            ],
            [
                'name' => '',
                'published_year' => '',
            ]
        ];

        foreach ($singles as $single) {
            $newSingle = new Single();

            $newSingle->name = $single['name'];
            $newSingle->published_year = $single['published_year'];

            $newSingle->save();
        }
    }
}

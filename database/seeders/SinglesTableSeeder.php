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
                'name' => 'No Puedo Escapar',
                'published_year' => 2025,
            ],
            [
                'name' => 'Call Me, I Still Love You (Vocal Version)',
                'published_year' =>  2025,
            ],
            [
                'name' => 'My Heart Is All Gone',
                'published_year' => 2025,
            ],
            [
                'name' => 'So Good(feat. Two Feet)',
                'published_year' => 2025,
            ],
            [
                'name' => 'CPR',
                'published_year' => 2025,
            ],
            [
                'name' => 'Pleasure',
                'published_year' => 2025,
            ],
            [
                'name' => 'Wait for You',
                'published_year' => 2024,
            ],
            [
                'name' => 'Want You to Want Me',
                'published_year' => 2024,
            ],
            [
                'name' => "Darling, I'm on Your Side",
                'published_year' => 2024,
            ],
            [
                'name' => 'Hitachi Vibe',
                'published_year' => 2024,
            ],
            [
                'name' => 'Let Me Go',
                'published_year' => 2024,
            ],
            [
                'name' => 'A.C.',
                'published_year' => 2024,
            ],
            [
                'name' => 'Falling to Pieces',
                'published_year' => 2024,
            ],
            [
                'name' => 'KILL ANYONE (feat. Ari Abdul)',
                'published_year' => 2023,
            ],
            [
                'name' => 'Cities',
                'published_year' => 2023,
            ],
            [
                'name' => 'More Than Chemical(feat. Two Feet)',
                'published_year' => 2023,
            ],
            [
                'name' => 'To My Knees',
                'published_year' => 2023,
            ],
            [
                'name' => 'Hard to Get(feat. Two Feet)',
                'published_year' => 2023,
            ],
            [
                'name' => 'Take Me Home(feat. Two Feet)',
                'published_year' => 2023,
            ],
            [
                'name' => 'City',
                'published_year' => 2023,
            ],
            [
                'name' => 'I Want You Dead',
                'published_year' => 2023,
            ],
            [
                'name' => 'Deep Cuts Mix EP:001(Fuck You I Love You)',
                'published_year' => 2023,
            ],
            [
                'name' => "I'm Sorry I Fucked Your Friend(unreleased demo)",
                'published_year' => 2023,
            ],
            [
                'name' => 'Tell Me The Truth',
                'published_year' => 2022,
            ],
            [
                'name' => 'Day by Day(DubVision Remix)',
                'published_year' => 2022,
            ],
            [
                'name' => 'My Life',
                'published_year' => 2022,
            ],
            [
                'name' => 'Play The Part',
                'published_year' => 2022,
            ],
            [
                'name' => 'Caviar',
                'published_year' => 2022,
            ],
            [
                'name' => 'Amy',
                'published_year' => 2022,
            ],
            [
                'name' => 'Day by Day(feat. Two Feet) ',
                'published_year' => 2022,
            ],
            [
                'name' => 'Until I Come Home',
                'published_year' => 2021,
            ],
            [
                'name' => "Don't Bring Me Down",
                'published_year' => 2021,
            ],
            [
                'name' => 'Ella',
                'published_year' => 2021,
            ],
            [
                'name' => 'Devil',
                'published_year' => 2021,
            ],
            [
                'name' => 'Fire In My Head',
                'published_year' => 2021,
            ],
            [
                'name' => 'Call Out My Name (Guitar Cover)',
                'published_year' => 2021,
            ],
            [
                'name' => 'Never Enough',
                'published_year' => 2021,
            ],
            [
                'name' => 'PATCHWERK(feat. Two Feet)',
                'published_year' => 2021,
            ],
            [
                'name' => 'Part Time Psycho(feat. Two Feet)',
                'published_year' => 2021,
            ],

            [
                'name' => 'I Want Love(feat. Two Feet)',
                'published_year' =>  2021,
            ],
            [
                'name' => 'Fire',
                'published_year' => 2021,
            ],
            [
                'name' => 'Time Fades Away',
                'published_year' => 2020,
            ],
            [
                'name' => "Think I'm Crazy (Unplugged)",
                'published_year' => 2020,
            ],
            [
                'name' => "Think I'm Crazy",
                'published_year' => 2020,
            ],
            [
                'name' => 'Call Me, I Still Love You (Extended Version)',
                'published_year' => 2020,
            ],
            [
                'name' => 'Norah (live bedroom recording)',
                'published_year' => 2020,
            ],
            [
                'name' => 'Drugs(feat. Two Feet)',
                'published_year' => 2020,
            ],
            [
                'name' => 'Lost The Game',
                'published_year' => 2018,
            ],
            [
                'name' => 'I Want It',
                'published_year' => 2018,
            ],
        ];

        foreach ($singles as $single) {
            $newSingle = new Single();

            $newSingle->name = $single['name'];
            $newSingle->published_year = $single['published_year'];

            $newSingle->save();
        }
    }
}

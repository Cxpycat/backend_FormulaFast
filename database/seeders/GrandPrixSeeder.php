<?php

namespace Database\Seeders;

use App\Models\GrandPrix;
use Illuminate\Database\Seeder;

class GrandPrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GrandPrix::create([
            'title' => 'Гран-при Бахрейна',
            'track_id' => 1,
            'country_id' => 1
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Саудовской Аравии',
            'track_id' => 2,
            'country_id' => 2
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Австралии',
            'track_id' => 3,
            'country_id' => 3
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Азербайджана',
            'track_id' => 4,
            'country_id' => 4
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Майами',
            'track_id' => 5,
            'country_id' => 17
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Эмилии-Романьи',
            'track_id' => 6,
            'country_id' => 13
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Монако',
            'track_id' => 7,
            'country_id' => 5
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Испании',
            'track_id' => 8,
            'country_id' => 6
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Канады',
            'track_id' => 9,
            'country_id' => 7
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Австрии',
            'track_id' => 10,
            'country_id' => 8
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Великобритании',
            'track_id' => 11,
            'country_id' => 9
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Венгрии',
            'track_id' => 12,
            'country_id' => 10
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Бельгии',
            'track_id' => 13,
            'country_id' => 11
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Нидерландов',
            'track_id' => 14,
            'country_id' => 12
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Италии',
            'track_id' => 15,
            'country_id' => 13
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Сингапура',
            'track_id' => 16,
            'country_id' => 14
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Японии',
            'track_id' => 17,
            'country_id' => 15
        ]);
        GrandPrix::create([
            'title' => 'Гран-при США',
            'track_id' => 18,
            'country_id' => 17
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Бразилии',
            'track_id' => 19,
            'country_id' => 19
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Мексики',
            'track_id' => 20,
            'country_id' => 18
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Абу-Даби',
            'track_id' => 21,
            'country_id' => 20
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Лас-Вегаса',
            'track_id' => 22,
            'country_id' => 17
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Катара',
            'track_id' => 23,
            'country_id' => 16
        ]);
    }
}

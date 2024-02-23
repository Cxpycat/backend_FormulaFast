<?php

namespace Database\Seeders;

use App\Models\Pilot;
use Illuminate\Database\Seeder;

class PilotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pilot::create([
            'first_name' => 'Макс',
            'last_name' => 'Ферстаппен',
            'img' => 'images/pilots/Ver.png',
            'country_id' => 12,
            'team_id' => 1,
        ]);
        Pilot::create([
            'first_name' => 'Серхио',
            'last_name' => 'Перес',
            'img' => 'images/pilots/PER.png',
            'country_id' => 18,
            'team_id' => 1,
        ]);
        Pilot::create([
            'first_name' => 'Льюис',
            'last_name' => 'Хэмилтон',
            'country_id' => 9,
            'team_id' => 2,
        ]);
        Pilot::create([
            'first_name' => 'Джордж',
            'last_name' => 'Расселл',
            'country_id' => 9,
            'team_id' => 2,
        ]);
        Pilot::create([
            'first_name' => 'Фернандо',
            'last_name' => 'Алонсо',
            'img' => 'images/pilots/ALONSO.png',
            'country_id' => 6,
            'team_id' => 3,
        ]);
        Pilot::create([
            'first_name' => 'Лэнс',
            'last_name' => 'Стролл',
            'country_id' => 7,
            'team_id' => 3,
        ]);
        Pilot::create([
            'first_name' => 'Шарль',
            'last_name' => 'Леклер',
            'country_id' => 5,
            'team_id' => 4,
        ]);
        Pilot::create([
            'first_name' => 'Карлос',
            'last_name' => 'Сайнс',
            'country_id' => 6,
            'team_id' => 4,
        ]);
        Pilot::create([
            'first_name' => 'Ландо',
            'last_name' => 'Норрис',
            'country_id' => 9,
            'team_id' => 9,
        ]);
        Pilot::create([
            'first_name' => 'Оскар',
            'last_name' => 'Пиастри',
            'country_id' => 3,
            'team_id' => 9,
        ]);
        Pilot::create([
            'first_name' => 'Эстебан',
            'last_name' => 'Окон',
            'country_id' => 22,
            'team_id' => 5,
        ]);
        Pilot::create([
            'first_name' => 'Пьер',
            'last_name' => 'Гасли',
            'country_id' => 22,
            'team_id' => 5,
        ]);
        Pilot::create([
            'first_name' => 'Александр',
            'last_name' => 'Элбон',
            'country_id' => 25,
            'team_id' => 10,
        ]);
        Pilot::create([
            'first_name' => 'Логан',
            'last_name' => 'Сарджент',
            'country_id' => 17,
            'team_id' => 10,
        ]);
        Pilot::create([
            'first_name' => 'Нико',
            'last_name' => 'Хюлькенберг',
            'country_id' => 23,
            'team_id' => 6,
        ]);
        Pilot::create([
            'first_name' => 'Кевин',
            'last_name' => 'Магнуссен',
            'country_id' => 26,
            'team_id' => 6,
        ]);
        Pilot::create([
            'first_name' => 'Валттери',
            'last_name' => 'Боттас',
            'country_id' => 24,
            'team_id' => 7,
        ]);
        Pilot::create([
            'first_name' => 'Гуаньюй',
            'last_name' => 'Чжоу',
            'country_id' => 27,
            'team_id' => 7,
        ]);
        Pilot::create([
            'first_name' => 'Юки',
            'last_name' => 'Цунода',
            'country_id' => 15,
            'team_id' => 8,
        ]);
        Pilot::create([
            'first_name' => 'Ник',
            'last_name' => 'де Врис',
            'country_id' => 2,
            'team_id' => 8,
        ]);
        Pilot::create([
            'first_name' => 'Даниэль',
            'last_name' => 'Риккардо',
            'country_id' => 3,
            'team_id' => 8,
        ]);
        Pilot::create([
            'first_name' => 'Лиам',
            'last_name' => 'Лоусон',
            'country_id' => 3,
            'team_id' => 8,
        ]);
    }

}

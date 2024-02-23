<?php

namespace Database\Seeders;

use App\Models\EventRaceType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventRaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventRaceType::create([
            'title' => 'Первая практика',
        ]);
        EventRaceType::create([
            'title' => 'Вторая практика',
        ]);
        EventRaceType::create([
            'title' => 'Третья практика',
        ]);
        EventRaceType::create([
            'title' => 'Квалификация',
        ]);
        EventRaceType::create([
            'title' => 'Гонка',
        ]);
        EventRaceType::create([
            'title' => 'Спринт квалификация',
        ]);
        EventRaceType::create([
            'title' => 'Спринт',
        ]);

    }
}

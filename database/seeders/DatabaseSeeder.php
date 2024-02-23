<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\News;
use App\Models\Pilot;
use App\Models\Race;
use App\Models\ResultRace;
use App\Models\Team;
use App\Models\Track;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $countrySeeder = new CountrySeeder();
        $countrySeeder->run();

        $grandPrixSeeder = new GrandPrixSeeder();
        $grandPrixSeeder->run();

        $eventRaceTypeSeeder = new EventRaceTypeSeeder();
        $eventRaceTypeSeeder->run();

        $scheduleSeeder = new ScheduleSeeder();
        $scheduleSeeder->run();

        $teamSeeder = new TeamSeeder();
        $teamSeeder->run();

        $pilotSeeder = new PilotSeeder();
        $pilotSeeder->run();

        $raceResultSeeder = new RaceResultSeeder();
        $raceResultSeeder->run();
    }


    private function race()
    {
        Race::create([
            'date' => Carbon::create(2023, 3, 5),
            'track_id' => 1,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 3, 19),
            'track_id' => 2,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 4, 2),
            'track_id' => 3,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 4, 30),
            'track_id' => 4,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 5, 7),
            'track_id' => 5,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 5, 28),
            'track_id' => 6,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 6, 4),
            'track_id' => 7,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 6, 18),
            'track_id' => 8,

            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 7, 2),
            'track_id' => 9,

            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 7, 9),
            'track_id' => 10,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 7, 23),
            'track_id' => 11,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 7, 30),
            'track_id' => 12,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 8, 27),
            'track_id' => 13,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 9, 3),
            'track_id' => 14,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 9, 17),
            'track_id' => 15,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 9, 24),
            'track_id' => 16,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 10, 8),
            'track_id' => 17,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 10, 22),
            'track_id' => 17,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 10, 29),
            'track_id' => 18,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 11, 5),
            'track_id' => 19,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 11, 18),
            'track_id' => 20,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Race::create([
            'date' => Carbon::create(2023, 11, 26),
            'track_id' => 21,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::create(2023, 3, 5, 14, 30),
            'fourth_event' => 'Квалификация',
            'fourth_event_time' => Carbon::create(2023, 3, 5, 18, 00),
            'race_event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
    }


    private function resultRace()
    {
        ResultRace::create([
            'race_id' => 1,
            'fastest_lap' => 18,
            'place_1' => 1,
            'place_2' => 2,
            'place_3' => 5,
            'place_4' => 8,
            'place_5' => 3,
            'place_6' => 6,
            'place_7' => 4,
            'place_8' => 17,
            'place_9' => 12,
            'place_10' => 13,
            'place_11' => 19,
            'place_12' => 14,
            'place_13' => 16,
            'place_14' => 20,
            'place_15' => 15,
            'place_16' => 18,
            'place_17' => 9,
        ]);

        ResultRace::create([
            'race_id' => 2,
            'fastest_lap' => 1,
            'place_1' => 2,
            'place_2' => 1,
            'place_3' => 5,
            'place_4' => 4,
            'place_5' => 3,
            'place_6' => 8,
            'place_7' => 7,
            'place_8' => 11,
            'place_9' => 12,
            'place_10' => 16,
            'place_11' => 19,
            'place_12' => 15,
            'place_13' => 18,
            'place_14' => 20,
            'place_15' => 10,
            'place_16' => 14,
            'place_17' => 9,
            'place_18' => 17,
        ]);

        ResultRace::create([
            'race_id' => 3,
            'fastest_lap' => 2,
            'place_1' => 1,
            'place_2' => 3,
            'place_3' => 5,
            'place_4' => 6,
            'place_5' => 2,
            'place_6' => 9,
            'place_7' => 15,
            'place_8' => 10,
            'place_9' => 18,
            'place_10' => 19,
            'place_11' => 17,
            'place_12' => 8,
            'place_13' => 12,
            'place_14' => 11,
            'place_15' => 20,
            'place_16' => 14,
            'place_17' => 16,
        ]);

        ResultRace::create([
            'race_id' => 4,
            'fastest_lap' => 4,
            'place_1' => 2,
            'place_2' => 1,
            'place_3' => 7,
            'place_4' => 5,
            'place_5' => 8,
            'place_6' => 3,
            'place_7' => 6,
            'place_8' => 4,
            'place_9' => 9,
            'place_10' => 19,
            'place_11' => 10,
            'place_12' => 13,
            'place_13' => 16,
            'place_14' => 12,
            'place_15' => 11,
            'place_16' => 14,
            'place_17' => 15,
            'place_18' => 17,
        ]);

        ResultRace::create([
            'race_id' => 5,
            'fastest_lap' => 1,
            'place_1' => 1,
            'place_2' => 2,
            'place_3' => 5,
            'place_4' => 4,
            'place_5' => 8,
            'place_6' => 3,
            'place_7' => 7,
            'place_8' => 12,
            'place_9' => 11,
            'place_10' => 16,
            'place_11' => 19,
            'place_12' => 6,
            'place_13' => 17,
            'place_14' => 13,
            'place_15' => 15,
            'place_16' => 18,
            'place_17' => 9,
            'place_18' => 20,
            'place_19' => 10,
            'place_20' => 14,
        ]);

        ResultRace::create([
            'race_id' => 6,
            'fastest_lap' => 3,
            'place_1' => 1,
            'place_2' => 5,
            'place_3' => 11,
            'place_4' => 3,
            'place_5' => 4,
            'place_6' => 7,
            'place_7' => 12,
            'place_8' => 8,
            'place_9' => 9,
            'place_10' => 10,
            'place_11' => 17,
            'place_12' => 20,
            'place_13' => 18,
            'place_14' => 13,
            'place_15' => 19,
            'place_16' => 2,
            'place_17' => 15,
            'place_18' => 14,
        ]);

        ResultRace::create([
            'race_id' => 7,
            'fastest_lap' => 1,
            'place_1' => 1,
            'place_2' => 3,
            'place_3' => 4,
            'place_4' => 2,
            'place_5' => 8,
            'place_6' => 6,
            'place_7' => 5,
            'place_8' => 11,
            'place_9' => 18,
            'place_10' => 12,
            'place_11' => 7,
            'place_12' => 19,
            'place_13' => 10,
            'place_14' => 20,
            'place_15' => 15,
            'place_16' => 13,
            'place_17' => 9,
            'place_18' => 16,
            'place_19' => 17,
            'place_20' => 14,
        ]);

        ResultRace::create([
            'race_id' => 8,
            'fastest_lap' => 2,
            'place_1' => 1,
            'place_2' => 5,
            'place_3' => 3,
            'place_4' => 7,
            'place_5' => 8,
            'place_6' => 2,
            'place_7' => 13,
            'place_8' => 11,
            'place_9' => 6,
            'place_10' => 17,
            'place_11' => 10,
            'place_12' => 12,
            'place_13' => 9,
            'place_14' => 19,
            'place_15' => 15,
            'place_16' => 18,
            'place_17' => 16,
            'place_18' => 20,
        ]);

        ResultRace::create([
            'race_id' => 9,
            'fastest_lap' => 1,
            'place_1' => 1,
            'place_2' => 7,
            'place_3' => 2,
            'place_4' => 9,
            'place_5' => 5,
            'place_6' => 8,
            'place_7' => 4,
            'place_8' => 3,
            'place_9' => 6,
            'place_10' => 12,
            'place_11' => 13,
            'place_12' => 18,
            'place_13' => 14,
            'place_14' => 11,
            'place_15' => 17,
            'place_16' => 10,
            'place_17' => 20,
            'place_18' => 16,
            'place_19' => 19,
        ]);

        ResultRace::create([
            'race_id' => 10,
            'fastest_lap' => 1,
            'place_1' => 1,
            'place_2' => 9,
            'place_3' => 3,
            'place_4' => 10,
            'place_5' => 4,
            'place_6' => 2,
            'place_7' => 5,
            'place_8' => 13,
            'place_9' => 7,
            'place_10' => 8,
            'place_11' => 14,
            'place_12' => 17,
            'place_13' => 15,
            'place_14' => 6,
            'place_15' => 18,
            'place_16' => 19,
            'place_17' => 20,
            'place_18' => 16,
        ]);
    }

    private function news()
    {
        News::create([
            'img' => 'images/9eb60bc8bf2b004e4db7d1cc0d5f1d8c_1689594812.png',
            'title' => 'В FIA ГОТОВЫ ОДОБРИТЬ ЗАЯВКИ ДВУХ НОВЫХ КОМАНД',
            'text' => "В начале июня истёк срок приёма заявок от новых команд на участие в Формуле-1, после чего в FIA приступили к их рассмотрению. Решение федерации должно быть озвучено в ближайшее время, и по информации Auto Motor und Sport, одобрение могут получить две команды.
                        <br>Речь идёт о проектах Andretti Cadillac и Hitech. Немецкое издание сообщает, что обе команды готовы к выступлению в Формуле-1 с точки зрения доступа к необходимым технологиям, наличия персонала и финансовых ресурсов.
                        <br>Однако «зелёного света» только от FIA недостаточно, чтобы новые команды дебютировали в Формуле-1. Необходимо ещё одобрение со стороны владельцев чемпионата из Liberty Media, а в последнее время руководитель Формулы-1 Стефано Доменикали выражал сомнение, что чемпионату нужны новые участники.
                        <br>Более того, даже если в Liberty Media дадут добро, правом вето может воспользоваться команда Ferrari и заблокировать появление новых команд. На прошлом этапе в Сильверстоуне руководитель Скудерии Фредерик Вассёр прямо заявил, что не видит среди потенциальных участников тех, чьё участие пойдёт на пользу Формуле-1."
        ]);
        News::create([
            'img' => 'images/59b2900aa03cb2182a51cdb520b535b6_1689526758.png',
            'title' => 'ЗАБАСТОВКА В ГОЛЛИВУДЕ СКАЖЕТСЯ НА СЪЁМКАХ ФИЛЬМА О ФОРМУЛЕ-1',
            'text' => "Начавшаяся 14 июля забастовка профсоюза голливудских актёров и Гильдии сценаристов неизбежно скажется на съёмочном процессе фильма о Формуле-1, в котором главную роль играет Брэд Питт.
                        <br>Этот процесс затормозился, как и реализация многих других кинопроектов – актёры и сценаристы Голливуда устроили подобную совместную акцию впервые с 1960 года.
                        <br>«Все съёмки в настоящее время остановлены, – заявил в интервью NBC News неназванный источник, близкий к создателям картины. – Брэду съёмочный процесс доставлял удовольствие, но он, безусловно, очень лояльный член профсоюза»."
        ]);
        News::create([
            'img' => 'images/586e508f161f26ce94633729ac56c602_1689519073.png',
            'title' => 'ЛУКА ДИ МОНТЕДЗЕМОЛО СТАЛ ИНВЕСТОРОМ ASTON MARTIN',
            'text' => "Лука ди Монтедземоло, бывший президент компании Ferrari, стал инвестором Aston Martin. По информации делового издания Business F1, итальянец вложил в компанию, которой руководит Лоуренс Стролл, $4 миллиона, поскольку верит в её успешное развитие. В настоящее время капитализация классического британского производителя спорткаров превышает $1 миллиард.
                        <br>Монтедземоло и Стролла связывает давнее знакомство – ещё с тех пор, когда бренд Tommy Hilfiger, экономику которого в своё время контролировал канадский миллиардер, был спонсором Скудерии.
                        <br>Впрочем, даже если экс-президент Ferrari верит в светлые перспективы Aston Martin, в настоящее время британская компания продолжает нести убытки, которые исчисляются $1,5 млн. в день. И это несмотря на все усилия Стролла переломить ситуацию, в частности, попытки увеличить продажи спорткаров за счёт привлекательных скидок. Кроме того, в мае Стролл продал часть своих акций Aston Martin на сумму в 117 млн. фунтов стерлингов китайской корпорации Geely.
                        <br>Фернандо Алонсо, с этого года выступающий за Aston Martin F1, поднимался на подиум в шести из десяти уже состоявшихся гонок сезона, и эта команда реально претендует на второе место в Кубке конструкторов, уступая Mercedes 22 очка и опережая Ferrari на 24 очка."
        ]);
        News::create([
            'img' => 'images/586e508f161f26ce94633729ac56c602_1689519073.png',
            'title' => 'ОФИЦИАЛЬНО: РИККАРДО ЗАМЕНИТ ДЕ ВРИЗА УЖЕ В ВЕНГРИИ',
            'text' => "В AlphaTauri подтвердили возвращение Даниэля Риккардо – уже в Венгрии он заменит Ника де Вриза до конца сезона.
                       <br>После успешной работы на шинных тестах в Сильверстоуне Даниэль Риккардо принял предложение выступать за AlphaTauri. Даниэль присоединится к команде на правах аренды от Red Bull Racing и выйдет на старт уже в Будапеште.
                       <br>Франц Тост, руководитель AlphaTauri: «Я очень рад вновь приветствовать Даниэля в нашей команде. Нет никаких сомнений в его навыках пилотирования, он лично знает многих из нас, поэтому его интеграция будет легкой и простой. Команда также получит большую пользу от его опыта, поскольку он является восьмикратным победителем Гран-При.
                       <br>Хочу поблагодарить Ника де Вриза за его ценный вклад во время работы в Scuderia AlphaTauri, желаю ему всего наилучшего в будущем».
                       <br>Кристиан Хорнер, руководитель Red Bull Racing: «Приятно видеть, что за время отсутствия в гонках Даниэль не потерял форму, а его успехи на симуляторе подтверждаются на трассе. На шинных тестах он показал отличное время, мы с нетерпением ждём результатов, которых он добьётся в AlphaTauri»."
        ]);
        News::create([
            'img' => 'images/fb59ee2075d480bdf0161d1d9c72906d_1688571323.webp',
            'title' => 'VALVOLINE – НОВЫЙ ПАРТНЁР ASTON MARTIN',
            'text' => "Компания Valvoline стала официальным партнёром команды Aston Martin по смазочным материалам. Стороны подписали  долгосрочный контракт, машины команды изменят раскраску только на Гран-При Великобритании.
                        <br>Valvoline – создатель первого в истории масла для автомобильных гонок, один из первых спонсоров автоспорта.
                        <br>Партнерство с Valvoline команда начнет со специальной одноразовой раскраски на Гран-При Великобритании, а продолжит с логотипами компании на своих машинах."
        ]);
    }
}

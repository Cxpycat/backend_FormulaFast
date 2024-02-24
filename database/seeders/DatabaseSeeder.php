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
        $trackSeeder = new TrackSeeder();
        $trackSeeder->run();

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

        $newsResultSeeder = new NewsSeeder();
        $newsResultSeeder->run();
    }

}

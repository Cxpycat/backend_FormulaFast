<?php

namespace Database\Seeders;

use App\Models\RaceResult;
use Illuminate\Database\Seeder;

class RaceResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->GP_1_2023();
        $this->GP_2_2023();
    }


    private function GP_1_2023()
    {
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 1,
            'team_id' => 1,
            'position' => 1,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 2,
            'team_id' => 1,
            'position' => 2,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 5,
            'team_id' => 3,
            'position' => 3,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 8,
            'team_id' => 4,
            'position' => 4,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 3,
            'team_id' => 2,
            'position' => 5,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 6,
            'team_id' => 3,
            'position' => 6,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 4,
            'team_id' => 2,
            'position' => 7,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 17,
            'team_id' => 7,
            'position' => 8,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 12,
            'team_id' => 5,
            'position' => 9,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 13,
            'team_id' => 10,
            'position' => 10,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 19,
            'team_id' => 8,
            'position' => 11,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 14,
            'team_id' => 10,
            'position' => 12,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 16,
            'team_id' => 6,
            'position' => 13,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 20,
            'team_id' => 8,
            'position' => 14,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 15,
            'team_id' => 6,
            'position' => 15,
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 18,
            'team_id' => 7,
            'position' => 16,
            'isFastestLap' => true
        ]);
        RaceResult::create([
            'grand_prix_id' => 1,
            'pilot_id' => 9,
            'team_id' => 9,
            'position' => 17,
        ]);
    }

    private function GP_2_2023()
    {
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 1,
            'team_id' => 1,
            'position' => 1,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 2,
            'team_id' => 1,
            'position' => 2,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 5,
            'team_id' => 3,
            'position' => 3,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 8,
            'team_id' => 4,
            'position' => 4,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 3,
            'team_id' => 2,
            'position' => 5,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 6,
            'team_id' => 3,
            'position' => 6,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 4,
            'team_id' => 2,
            'position' => 7,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 17,
            'team_id' => 7,
            'position' => 8,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 12,
            'team_id' => 5,
            'position' => 9,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 13,
            'team_id' => 10,
            'position' => 10,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 19,
            'team_id' => 8,
            'position' => 11,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 14,
            'team_id' => 10,
            'position' => 12,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 16,
            'team_id' => 6,
            'position' => 13,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 20,
            'team_id' => 8,
            'position' => 14,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 15,
            'team_id' => 6,
            'position' => 15,
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 18,
            'team_id' => 7,
            'position' => 16,
            'isFastestLap' => true
        ]);
        RaceResult::create([
            'grand_prix_id' => 2,
            'pilot_id' => 9,
            'team_id' => 9,
            'position' => 17,
        ]);
    }

}

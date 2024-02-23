<?php

namespace App\Services;

use App\Models\RaceResult;

abstract class Pts
{

    const POINTS_GRAND_PRIX = [1 => 25, 2 => 18, 3 => 15, 4 => 12, 5 => 10, 6 => 8, 7 => 6, 8 => 4, 9 => 2, 10 => 1];

    static public function getAllPts($type_element, $id): int
    {
        $pts = 0;

        $resultRaces = RaceResult::where($type_element, $id)->select('position', 'isFastestLap', 'type_race')->get();
        foreach ($resultRaces as $resultRace) {

            if ($resultRace->type_race == 1 && $resultRace->position <= 10) {
                $pts += self::POINTS_GRAND_PRIX[$resultRace->position];

                if ($resultRace->isFastestLap) {
                    $pts += 1;
                }
            }

            if ($resultRace->type_race == 2 && $resultRace->position <= 8) {
                $pts += self::POINTS_GRAND_PRIX[$resultRace->position];
            }
        }
        return $pts;
    }

    static public function getResultRaces($type_element, $id): array
    {
        $resultRaces = RaceResult::where($type_element, $id)->select('position', 'isFastestLap', 'type_race', 'grand_prix_id')->get();

        $result = [];
        foreach ($resultRaces as $resultRace) {
            if (!isset($result[$resultRace->grand_prix_id])) {
                $result[$resultRace->grand_prix_id] = 0;
            }
            if ($resultRace->type_race == 1 && $resultRace->position <= 10) {
                $result[$resultRace->grand_prix_id] += self::POINTS_GRAND_PRIX[$resultRace->position];

                if ($resultRace->isFastestLap) {
                    $result[$resultRace->grand_prix_id] += 1;
                }
            }

            if ($resultRace->type_race == 2 && $resultRace->position <= 8) {
                $result[$resultRace->grand_prix_id] += self::POINTS_GRAND_PRIX[$resultRace->position];
            }
        }

        return $result;
    }


    static public function getPtsForRace($type_element, $id, $grand_prix_id): int
    {
        $pts = 0;

        $resultRaces = RaceResult::where($type_element, $id)->where('grand_prix_id', $grand_prix_id)->select('position', 'isFastestLap', 'type_race')->get();
        foreach ($resultRaces as $resultRace) {

            if ($resultRace->type_race == 1 && $resultRace->position <= 10) {
                $pts += self::POINTS_GRAND_PRIX[$resultRace->position];

                if ($resultRace->isFastestLap) {
                    $pts += 1;
                }
            }

            if ($resultRace->type_race == 2 && $resultRace->position <= 8) {
                $pts += self::POINTS_GRAND_PRIX[$resultRace->position];
            }
        }
        return $pts;
    }

}

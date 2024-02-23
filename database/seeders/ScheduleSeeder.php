<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use ReflectionClass;
use ReflectionMethod;


class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 23; $i++) {
            $this->{'GP_' . $i . '_2023'}();
        }
    }


    private function GP_1_2023()
    {
        Schedule::create([
            'grand_prix_id' => 1,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 3, 15, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 1,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 3, 15, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 1,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 3, 15, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 1,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 3, 15, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 1,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 3, 16, 13, 10),
        ]);
    }

    private function GP_2_2023()
    {
        Schedule::create([
            'grand_prix_id' => 2,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 3, 22, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 2,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 3, 22, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 2,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 3, 22, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 2,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 3, 22, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 2,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 3, 23, 13, 10),
        ]);
    }

    private function GP_3_2023()
    {
        Schedule::create([
            'grand_prix_id' => 3,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 4, 5, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 3,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 4, 5, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 3,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 4, 5, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 3,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 4, 5, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 3,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 4, 6, 13, 10),
        ]);
    }

    private function GP_4_2023()
    {
        Schedule::create([
            'grand_prix_id' => 4,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 4, 19, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 4,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 4, 19, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 4,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 4, 19, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 4,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 4, 19, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 4,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 4, 20, 13, 10),
        ]);
    }

    private function GP_5_2023()
    {
        Schedule::create([
            'grand_prix_id' => 5,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 5, 3, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 5,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 5, 3, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 5,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 5, 3, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 5,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 5, 3, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 5,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 5, 4, 13, 10),
        ]);
    }

    private function GP_6_2023()
    {
        Schedule::create([
            'grand_prix_id' => 6,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 5, 10, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 6,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 5, 10, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 6,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 5, 10, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 6,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 5, 10, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 6,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 5, 11, 13, 10),
        ]);
    }

    private function GP_7_2023()
    {
        Schedule::create([
            'grand_prix_id' => 7,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 5, 24, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 7,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 5, 24, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 7,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 5, 24, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 7,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 5, 24, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 7,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 5, 25, 13, 10),
        ]);
    }

    private function GP_8_2023()
    {
        Schedule::create([
            'grand_prix_id' => 8,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 5, 31, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 8,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 5, 31, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 8,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 5, 31, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 8,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 5, 31, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 8,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 6, 1, 13, 10),
        ]);
    }

    private function GP_9_2023()
    {
        Schedule::create([
            'grand_prix_id' => 9,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 6, 7, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 9,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 6, 7, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 9,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 6, 7, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 9,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 6, 7, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 9,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 6, 8, 13, 10),
        ]);
    }

    private function GP_10_2023()
    {
        Schedule::create([
            'grand_prix_id' => 10,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 6, 14, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 10,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 6, 14, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 10,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 6, 14, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 10,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 6, 14, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 10,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
    }


    private function GP_11_2023()
    {
        Schedule::create([
            'grand_prix_id' => 11,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 11,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 11,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 11,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 11,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
    }

    private function GP_12_2023()
    {
        Schedule::create([
            'grand_prix_id' => 12,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 12,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 12,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 12,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 12,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
    }

    private function GP_13_2023()
    {
        Schedule::create([
            'grand_prix_id' => 13,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 13,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 13,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 13,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 13,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
    }

    private function GP_14_2023()
    {
        Schedule::create([
            'grand_prix_id' => 14,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 14,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 14,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 14,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
        Schedule::create([
            'grand_prix_id' => 14,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 6, 15, 13, 10),
        ]);
    }

    private function GP_15_2023()
    {
        Schedule::create([
            'grand_prix_id' => 15,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 11, 27, 9, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 15,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 11, 27, 13, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 15,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 11, 28, 10, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 15,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 11, 28, 14, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 15,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 11, 29, 13, 10),
        ]);
    }

    private function GP_16_2023()
    {
        Schedule::create([
            'grand_prix_id' => 16,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 12, 6, 8, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 16,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 12, 6, 12, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 16,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 12, 6, 9, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 16,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 12, 6, 13, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 16,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 12, 7, 11, 10),
        ]);
    }

    private function GP_17_2023()
    {
        Schedule::create([
            'grand_prix_id' => 17,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 12, 13, 11, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 17,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 12, 13, 15, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 17,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 12, 13, 12, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 17,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 12, 13, 16, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 17,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 12, 14, 14, 10),
        ]);
    }


    private function GP_18_2023()
    {
        Schedule::create([
            'grand_prix_id' => 18,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 18,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 18,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 18,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 18,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 10, 8, 18, 00),
        ]);
    }

    private function GP_19_2023()
    {
        Schedule::create([
            'grand_prix_id' => 19,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 19,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 19,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 19,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 19,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 10, 22, 18, 00),
        ]);
    }

    private function GP_20_2023()
    {
        Schedule::create([
            'grand_prix_id' => 20,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 20,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 20,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 20,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 20,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 10, 29, 18, 00),
        ]);
    }

    private function GP_21_2023()
    {
        Schedule::create([
            'grand_prix_id' => 21,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 21,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 21,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 21,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 21,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 11, 5, 18, 00),
        ]);
    }

    private function GP_22_2023()
    {
        Schedule::create([
            'grand_prix_id' => 22,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 22,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 22,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 22,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 22,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 11, 19, 18, 00),
        ]);
    }

    private function GP_23_2023()
    {
        Schedule::create([
            'grand_prix_id' => 23,
            'event_id' => 1,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 23,
            'event_id' => 2,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 23,
            'event_id' => 3,
            'event_time' => Carbon::create(2023, 3, 5, 14, 30),
        ]);
        Schedule::create([
            'grand_prix_id' => 23,
            'event_id' => 4,
            'event_time' => Carbon::create(2023, 3, 5, 18, 00),
        ]);
        Schedule::create([
            'grand_prix_id' => 23,
            'event_id' => 5,
            'event_time' => Carbon::create(2023, 11, 26, 18, 00),
        ]);
    }
}

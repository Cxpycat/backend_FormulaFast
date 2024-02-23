<?php

namespace Database\Factories;

use App\Models\EventRaceType;
use App\Models\GrandPrix;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grand_prix_id' => GrandPrix::all()->random()->id,
            'event_id' => EventRaceType::all()->random()->id,
            'event_time' => $this->faker->time(),
        ];
    }
}

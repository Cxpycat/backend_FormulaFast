<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RaceResultFactory extends Factory
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
            'pilot_id' => Pilot::all()->random()->id,
            'team_id' => Team::all()->random()->id,
            'position' => $this->faker->numberBetween(1, 20),
            'isFastestLap' => $this->faker->boolean(),
        ];
    }
}

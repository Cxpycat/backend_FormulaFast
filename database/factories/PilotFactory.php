<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class PilotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale(),
            'surname' => $this->faker->lastName(),
            'img' => 'images/pilots/PER.png',
            'country_id' => Country::all()->random()->id,
            'team_id' => Team::all()->random()->id,
        ];
    }
}

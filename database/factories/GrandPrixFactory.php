<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrandPrixFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->streetName(),
            'country_id'=> Country::all()->random()->id,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->country(),
            'title_short' => $this->faker->countryCode(),
            'img' => $this->faker->countryCode(), //TODO переделать на изображение из стореджа
        ];
    }
}

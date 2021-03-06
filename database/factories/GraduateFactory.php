<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GraduateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nisn' => $this->faker->randomNumber(8, true),
            'name' => $this->faker->name(),
            'year' => rand(2017, 2021),
        ];
    }
}

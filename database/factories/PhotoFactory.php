<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_id' => rand(1,2),
            'title' => $this->faker->words(5, true),
            'file' => 'default.png',
            'created_at' => $this->faker->date(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_id' => rand(1,3),
            'title' => $this->faker->words(4, true),
            'file' => 'default.png',
            'is_public' => rand(0, 1),
            'created_at' => $this->faker->date(),
        ];
    }
}

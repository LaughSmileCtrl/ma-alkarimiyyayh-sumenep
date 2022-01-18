<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(6, true),
            'type_id' => rand(1, 2),
            'author' => $this->faker->name(),
            'image' => 'default.png',
            'content' => $this->faker->paragraphs(30, true),
        ];
    }
}

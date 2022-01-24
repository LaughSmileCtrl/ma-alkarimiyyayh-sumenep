<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PpdbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = ['Perempuan', 'Laki-Laki'];

        return [
            'name' => $this->faker->name(),
            'nisn' => $this->faker->randomNumber(8, true),
            'nik' => $this->faker->randomNumber(8, true),
            'no_kk' => $this->faker->randomNumber(8, true),
            'place_of_birth' => $this->faker->words(2, true),
            'date_of_birth' => $this->faker->date(),
            'gender' => $gender[rand(0, 1)],
            'child_order' => rand(1, 4),
            'total_brother' => rand(2, 7),
            'phone' => '0000'.$this->faker->randomNumber(8, true),
            'address' => $this->faker->address(),
            'father_name' => $this->faker->name('male'),
            'father_nik' => $this->faker->randomNumber(8, true),
            'father_place_of_birth' => $this->faker->words(2, true),
            'father_date_of_birth' => $this->faker->date(),
            'father_last_education' => $this->faker->word(),
            'father_profession' => $this->faker->word(),
            'father_phone' => '0000'.$this->faker->randomNumber(8, true),
            'father_address' => $this->faker->address(),
            'mother_name' => $this->faker->name('female'),
            'mother_nik' => $this->faker->randomNumber(8, true),
            'mother_place_of_birth' => $this->faker->words(2, true),
            'mother_date_of_birth' => $this->faker->date(),
            'mother_last_education' => $this->faker->word(),
            'mother_profession' => $this->faker->word(),
            'mother_phone' => '0000'.$this->faker->randomNumber(8, true),
            'mother_address' => $this->faker->address(),
        ];
    }
}

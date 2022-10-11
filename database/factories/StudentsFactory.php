<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->unique()->numberBetween(1000,2000),
            'name' => $this->faker->lastName(),
            'majors_id' => $this->faker->numberBetween(1,10)
        ];
    }
}

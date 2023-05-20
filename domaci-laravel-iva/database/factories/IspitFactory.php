<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ispit>
 */
class IspitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'predmet_id' => $this->faker->randomDigitNot(0),
            'student_id' => $this->faker->randomDigitNot(0),
            'Rezultat' => $this->faker->randomElement($array = array('Polozio', 'Pao'))
        ];
    }
}
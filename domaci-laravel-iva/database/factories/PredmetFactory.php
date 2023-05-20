<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Predmet>
 */
class PredmetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Naziv' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
            'Opis' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'Naziv katedre' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
        ];
    }
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diplome>
 */
class DiplomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'niveau' => fake()->word(),
            'session' => fake()->date('y-m-d','now'),
            'serie' => fake()->randomLetter(),
            'prenom' => fake()->firstName(),
            'nom' => fake()->lastName(),
            'sexe' => fake()->word(),
            'num_table' => fake()->numberBetween(100000,658947),

        ];
    }
}

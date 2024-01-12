<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Header>
 */
class HeaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 10),
            'section_id' => rand(1, 10),
            'completed' => fake()->boolean(),
            'quiz_size' => fake()->randomNumber(3),
            'questions_taken' => fake()->sentence(2),
            'score' => fake()->randomFloat(),
        ];
    }
}

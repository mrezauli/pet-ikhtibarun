<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
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
            'question_id' => rand(1, 10),
            'total_points' => fake()->randomNumber(3),
            'correct' => fake()->sentence(2),
            'date' => fake()->dateTime(),
        ];
    }
}
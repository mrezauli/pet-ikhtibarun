<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionResult>
 */
class QuestionResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'result_id' => rand(1, 10),
            'question_id' => rand(1, 10),
            'option_id' => rand(1, 10),
            'points' => fake()->randomNumber(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnswerTest>
 */
class AnswerTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'correct' => fake()->boolean(),
            'user_id' => rand(1, 10),
            'test_id' => rand(1, 10),
            'question_id' => rand(1, 10),
            'option_id' => rand(1, 10),
        ];
    }
}
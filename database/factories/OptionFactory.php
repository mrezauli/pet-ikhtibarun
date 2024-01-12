<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Option>
 */
class OptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_id' => rand(1, 10),
            'option_text' => fake()->sentence(2),
            'correct' => fake()->boolean(),
            'points' => fake()->randomNumber(3),
        ];
    }
}

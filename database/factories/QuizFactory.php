<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(2),
            'slug' => fake()->sentence(2),
            'description' => fake()->sentence(2),
            'published' => fake()->boolean(),
            'public' => fake()->boolean(),
            'user_id' => rand(1, 10),
            'header_id' => rand(1, 10),
            'section_id' => rand(1, 10),
            'question_id' => rand(1, 10),
            'answer_id' => rand(1, 10),
            'is_correct' => fake()->randomElement(['0', '1']),
        ];
    }
}

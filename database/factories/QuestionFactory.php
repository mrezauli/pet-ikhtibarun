<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_text' => fake()->sentence(2),
            'code_snippet' => fake()->sentence(2),
            'answer_explanation' => fake()->sentence(2),
            'more_info_link' => fake()->sentence(2),
            'is_active' => fake()->randomElement(['0', '1']),
            'user_id' => rand(1, 10),
            'section_id' => rand(1, 10),
            'category_id' => rand(1, 10),
            'topic_id' => rand(1, 10),
        ];
    }
}
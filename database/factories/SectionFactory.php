<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
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
            'name' => fake()->sentence(2),
            'description' => fake()->sentence(2),
            'details' => fake()->sentence(2),
            'is_active' => fake()->randomElement(['0', '1']),
        ];
    }
}

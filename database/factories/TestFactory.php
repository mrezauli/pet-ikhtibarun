<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'result' => fake()->randomNumber(3),
            'time_spent' => fake()->randomNumber(3),
            'ip_address' => fake()->ipv4(),
            'user_id' => rand(1, 10),
            'quiz_id' => rand(1, 10),
        ];
    }
}

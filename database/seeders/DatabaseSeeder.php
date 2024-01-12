<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Answer::factory(10)->create();
        \App\Models\AnswerTest::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Header::factory(10)->create();
        \App\Models\Option::factory(10)->create();
        \App\Models\OptionQuestion::factory(10)->create();
        \App\Models\Question::factory(10)->create();
        \App\Models\QuestionQuiz::factory(10)->create();
        \App\Models\QuestionResult::factory(10)->create();
        \App\Models\Quiz::factory(10)->create();
        \App\Models\Result::factory(10)->create();
        \App\Models\Section::factory(10)->create();
        \App\Models\Test::factory(10)->create();
        \App\Models\Topic::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

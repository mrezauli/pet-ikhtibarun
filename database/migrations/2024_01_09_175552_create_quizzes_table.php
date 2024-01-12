<?php

use App\Models\Answer;
use App\Models\Header;
use App\Models\Question;
use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->boolean('published')->default(false)->nullable();
            $table->boolean('public')->default(false)->nullable();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Header::class);
            $table->foreignIdFor(Section::class);
            $table->foreignIdFor(Question::class);
            $table->foreignIdFor(Answer::class);
            $table->boolean('is_correct')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};

<?php

use App\Models\Test;
use App\Models\User;
use App\Models\Option;
use App\Models\Question;
use App\Models\OptionQuestion;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answer_test', function (Blueprint $table) {
            $table->id();
            $table->boolean('correct')->default(false);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Test::class);
            $table->foreignIdFor(Question::class);
            $table->foreignIdFor(Option::class);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_test');
    }
};

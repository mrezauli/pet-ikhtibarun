<?php

namespace App\Models;

use App\Models\Option;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnswerTest extends Pivot
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'test_id',
        'question_id',
        'option_id',
        'correct',
    ];

    // public static function boot()
    // {
    //     parent::boot();

    //     TestAnswer::observe(new \App\Observers\UserActionsObserver);
    // }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }

    public function option(): BelongsTo
    {
        return $this->belongsTo(Option::class);
    }
}
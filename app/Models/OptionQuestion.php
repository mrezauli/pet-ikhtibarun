<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OptionQuestion extends Pivot
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'option',
        'correct',
        'question_id',
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }


    // public static function boot()
    // {
    //     parent::boot();

    //     QuestionsOption::observe(new \App\Observers\UserActionsObserver);
    // }

    /**
     * Set to null if empty
     * @param $input
     */
    // public function setQuestionIdAttribute($input)
    // {
    //     $this->attributes['question_id'] = $input ? $input : null;
    // }

    // public function question()
    // {
    //     return $this->belongsTo(Question::class, 'question_id')->withTrashed();
    // }
}

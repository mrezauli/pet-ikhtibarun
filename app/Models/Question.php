<?php

namespace App\Models;

use App\Models\OptionQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'question_text',
        'code_snippet',
        'answer_explanation',
        'more_info_link',
        'category_id',
        'topic_id',
        'section_id',
        'user_id',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }




    public function optionQuestions(): HasMany
    {
        //return $this->hasMany(OptionQuestion::class)->inRandomOrder();
        return $this->hasMany(OptionQuestion::class);
    }
    // public function questionOptions()
    // {
    //     return $this->hasMany(Option::class, 'question_id', 'id');
    // }

    public function quizzes(): BelongsToMany
    {
        return $this->belongsToMany(Quiz::class);
    }
    // public static function boot()
    // {
    //     parent::boot();

    //     Question::observe(new \App\Observers\UserActionsObserver);
    // }

    /**
     * Set to null if empty
     * @param $input
     */
    // public function setTopicIdAttribute($input)
    // {
    //     $this->attributes['topic_id'] = $input ? $input : null;
    // }


    public function results(): BelongsToMany
    {
        return $this->belongsToMany(Result::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function topic(): BelongsTo
    {
        //return $this->belongsTo(Topic::class, 'topic_id')->withTrashed();
        return $this->belongsTo(Topic::class);
    }

    //     public function optionQuestions(): HasMany
    //     {
    //         //return $this->hasMany(QuestionsOption::class, 'question_id')->withTrashed();
    //         return $this->hasMany(OptionQuestion::class);
    //    }
}

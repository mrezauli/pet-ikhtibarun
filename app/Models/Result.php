<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'total_points',
        'correct',
        'date',
        'question_id'
    ];

    // public static function boot()
    // {
    //     parent::boot();

    //     Result::observe(new \App\Observers\UserActionsObserver);
    // }

    /**
     * Set to null if empty
     * @param $input
     */
    // public function setUserIdAttribute($input)
    // {
    //     $this->attributes['user_id'] = $input ? $input : null;
    // }

    /**
     * Set to null if empty
     * @param $input
     */
    // public function setQuestionIdAttribute($input)
    // {
    //     $this->attributes['question_id'] = $input ? $input : null;
    // }

    /**
     * Set attribute to date format
     * @param $input
     */
    // public function setDateAttribute($input)
    // {
    //     if ($input != null) {
    //         $this->attributes['date'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
    //     } else {
    //         $this->attributes['date'] = null;
    //     }
    // }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    // public function getDateAttribute($input)
    // {
    //     $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

    //     if ($input != $zeroDate && $input != null) {
    //         return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
    //     } else {
    //         return '';
    //     }
    // }

    public function user(): BelongsTo
    {
        //return $this->belongsTo(User::class, 'user_id')->withTrashed();
        return $this->belongsTo(User::class);
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function question(): BelongsTo
    {
        //return $this->belongsTo(Question::class, 'question_id')->withTrashed();
        return $this->belongsTo(Question::class);
    }



    // public function questions()
    // {
    //     return $this->belongsToMany(Question::class)->withPivot(['option_id', 'points']);
    // }
}
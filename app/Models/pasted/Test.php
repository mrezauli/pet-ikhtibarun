<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Test
 *
 * @package App
 * @property string $title
 */
class Test extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'result',         'user_id',
        'quiz_id',
        'result',
        'ip_address',
        'time_spent',
    ];

    public static function boot()
    {
        parent::boot();

        Test::observe(new \App\Observers\UserActionsObserver);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
    use HasFactory;
    use SoftDeletes;




    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'test_answers', 'test_id', 'question_id');
    }
}
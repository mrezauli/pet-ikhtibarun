<?php

namespace App\Models;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Test extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'result',
        'quiz_id',
        'ip_address',
        'time_spent',
    ];

    // public static function boot()
    // {
    //     parent::boot();

    //     Test::observe(new \App\Observers\UserActionsObserver);
    // }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class);
    }
}
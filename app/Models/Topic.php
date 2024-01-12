<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title'];

    // public static function boot()
    // {
    //     parent::boot();

    //     Topic::observe(new \App\Observers\UserActionsObserver);
    // }

    public function questions(): HasMany
    {
        //return $this->hasMany(Question::class, 'topic_id')->withTrashed();
        return $this->hasMany(Question::class);
    }
}
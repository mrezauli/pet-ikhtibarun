<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Option extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'points',
        'question_id',
        'option_text',
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
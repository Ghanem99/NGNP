<?php

namespace App\Models;

use App\Models\User;
use App\Models\Exercise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExerciseUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'exercise_id', 
        'reps'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function exercise() : BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }
}

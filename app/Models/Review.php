<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'feedback',
        'rating',
        'status',
        'user_id',
        'gym_id',
    ];

    /**
     * Get the user that owns the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the gym that owns the review.
     */
    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
}

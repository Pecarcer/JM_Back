<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'score',
        'opinion',
        'reviewer',
        'boardgame_id'
    ];

    public function boardgame()
    {
        return $this->belongsTo(
            Boardgame::class,
            'boardgame_id'
        );
    }

    public function reviewer()
    {
        return $this->belongsTo(
            User::class,
            'reviewer'
        );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

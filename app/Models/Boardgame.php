<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'creator',
        'release',
        'min_num_players',
        'max_num_players',
        'playing_time',
        'ages',
        'publisher',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}

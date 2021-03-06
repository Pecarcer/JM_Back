<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user',
        'game',
    ];


    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user'
        );
    }

    public function game()
    {
        return $this->belongsTo(
            Game::class,
            'game'
        );
    }
}

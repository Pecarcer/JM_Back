<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'time',
        'master',
        'boardgame_id'
    ];

    public function boardgame()
    {
        return $this->belongsTo(
            Boardgame::class,
            'boardgame_id'
        );
    }

    public function master()
    {
        return $this->belongsTo(
            User::class,
            'master'
        );
    }




}

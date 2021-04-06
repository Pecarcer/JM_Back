<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'floor',
        'room_name',
    ];

    public function manager()
    {
        return $this->belongsTo(
            User::class,
            'manager'
        );
    }
}

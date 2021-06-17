<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user',
        'review',
    ];

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user'
        );
    }

    public function review()
    {
        return $this->belongsTo(
            Review::class,
            'review'
        );
    }
}

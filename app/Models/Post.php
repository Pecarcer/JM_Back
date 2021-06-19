<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_text',
        'title',
        'poster'
    ];

    public function poster()
    {
        return $this->belongsTo(
            User::class,
            'poster'
        );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

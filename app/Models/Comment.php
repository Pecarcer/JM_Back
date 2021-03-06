<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'commentary',
        'author',
        'review_id'
    ];


    public function author()
    {
        return $this->belongsTo(
            User::class,
            'author'
        );
    }

    public function review()
    {
        return $this->belongsTo(
            Review::class,
            'review_id'
        );
    }

}

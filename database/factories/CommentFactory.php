<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->numberBetween(1, User::count()),
            'review_id' => $this->faker->numberBetween(1, Review::count()),
            'commentary' => $this->faker->sentence(10),
        ];
    }
}

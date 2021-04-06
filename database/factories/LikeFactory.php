<?php

namespace Database\Factories;

use App\Models\Like;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Like::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user' => $this->faker->numberBetween(1,User::count()),
            'review' => $this->faker->numberBetween(1,Review::count()),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Boardgame;
use App\Models\Game;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'master' => $this->faker->numberBetween(1,User::count()),
            'boardgame_id' => $this->faker->numberBetween(1,Boardgame::count()),
        ];
    }
}

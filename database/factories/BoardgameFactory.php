<?php

namespace Database\Factories;

use App\Models\Boardgame;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoardgameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Boardgame::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastName;
        $name = $firstName . " " . $lastName;


        $min = $this->faker->numberBetween(1,5);
        $max = $this->faker->numberBetween(3,10);


        if($min>$max){
            $temp = $max;
            $max = $min;
            $min = $temp;
        }
        if($min == $max){
            $max++;
        }

        $min_num_players = $min;
        $max_num_players = $max;

        $play_time = 5 * $this->faker->numberBetween(2,25);

        $play_time = $play_time . " Min";

        $ages = " +" . $this->faker->numberBetween(2,16);

        return [
            'title' => $this->faker->unique()->word,
            'creator' => $name,
            'release' => $this->faker->date(),
            'min_num_players' => $min_num_players,
            'max_num_players' => $max_num_players,
            'playing_time' => $play_time,
            'ages' => $ages,
            'publisher' => $this->faker->unique()->word,
            'image' => "imagenJuegoDefault.jpg"
        ];
    }
}

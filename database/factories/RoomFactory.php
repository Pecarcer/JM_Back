<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $piso = $this->faker->numberBetween(0,4);

        if($piso==0){
            $piso = "Planta Baja";
        } else {
            $piso = $piso . "º Planta";
        }

        return [
            'address' => $this->faker->address,
            'floor' => $piso,
            'room_name' => "Sala " . $this->faker->numberBetween(1,6),
            'manager'=> $this->faker->numberBetween(1,User::count()),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Debtor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DebtorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Debtor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user' => $this->faker->unique()->numberBetween(4, User::count()),
            'months_overdue' => $this->faker->numberBetween(1, 12),
        ];
    }
}

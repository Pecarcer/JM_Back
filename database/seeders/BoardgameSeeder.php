<?php

namespace Database\Seeders;

use App\Models\Boardgame;
use Illuminate\Database\Seeder;

class BoardgameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boardgame::factory(50)->create();
        $this->command->info('Boardgames añadidas correctamente');
    }
}

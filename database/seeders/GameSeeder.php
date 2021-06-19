<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Game::factory(100)->create();



        DB::table('games')->insert([
            'master' => '1',
            'boardgame_id' => '1',
            'date' => '2020-06-01',
            'time' => '17:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '1',
            'boardgame_id' => '2',
            'date' => '2020-06-02',
            'time' => '16:35',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '1',
            'boardgame_id' => '3',
            'date' => '2020-06-05',
            'time' => '12:15',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '2',
            'boardgame_id' => '1',
            'date' => '2020-06-08',
            'time' => '17:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'master' => '4',
            'boardgame_id' => '5',
            'date' => '2020-06-10',
            'time' => '16:00',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '6',
            'boardgame_id' => '3',
            'date' => '2020-06-21',
            'time' => '17:35',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'master' => '3',
            'boardgame_id' => '3',
            'date' => '2020-06-01',
            'time' => '17:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '5',
            'boardgame_id' => '5',
            'date' => '2020-06-05',
            'time' => '17:05',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '7',
            'boardgame_id' => '7',
            'date' => '2020-06-07',
            'time' => '17:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '6',
            'boardgame_id' => '6',
            'date' => '2020-06-12',
            'time' => '18:50',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'master' => '1',
            'boardgame_id' => '10',
            'date' => '2020-07-01',
            'time' => '11:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '10',
            'boardgame_id' => '2',
            'date' => '2020-08-01',
            'time' => '14:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'master' => '9',
            'boardgame_id' => '8',
            'date' => '2020-06-08',
            'time' => '20:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '7',
            'boardgame_id' => '6',
            'date' => '2020-02-05',
            'time' => '08:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'master' => '4',
            'boardgame_id' => '5',
            'date' => '2020-06-09',
            'time' => '09:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '3',
            'boardgame_id' => '1',
            'date' => '2020-06-04',
            'time' => '16:10',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'master' => '8',
            'boardgame_id' => '9',
            'date' => '2020-06-09',
            'time' => '10:39',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '4',
            'boardgame_id' => '4',
            'date' => '2019-06-01',
            'time' => '12:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('games')->insert([
            'master' => '5',
            'boardgame_id' => '5',
            'date' => '2020-06-27',
            'time' => '20:30',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('games')->insert([
            'master' => '2',
            'boardgame_id' => '8',
            'date' => '2020-12-01',
            'time' => '17:35',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);




        $this->command->info('Games añadidas correctamente');
    }
}

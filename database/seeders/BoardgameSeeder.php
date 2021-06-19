<?php

namespace Database\Seeders;

use App\Models\Boardgame;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardgameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Boardgame::factory(50)->create();

        DB::table('boardgames')->insert([
            'title' => 'Catan',
            'creator' => 'Juan Catan',
            'release' => '1990-03-02',
            'max_num_players' => '8',
            'min_num_players' => '3',
            'playing_time' => '30 Min',
            'ages'=> '9+',
            'publisher' => 'Asmodee',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Gloomhaven',
            'creator' => 'Isaac Childres',
            'release' => '2017-01-02',
            'max_num_players' => '4',
            'min_num_players' => '1',
            'playing_time' => '60-120 Min',
            'ages'=> '14+',
            'publisher' => 'Cephalofair Games',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Colonos del Imperio',
            'creator' => 'Ignacy Trzewiczek',
            'release' => '2014-04-11',
            'max_num_players' => '4',
            'min_num_players' => '1',
            'playing_time' => '45-90 Min',
            'ages'=> '10+',
            'publisher' => 'Portal Games',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Terraforming Mars',
            'creator' => 'Jacob Fryxelius',
            'release' => '2016-02-01',
            'max_num_players' => '5',
            'min_num_players' => '1',
            'playing_time' => '120 Min',
            'ages'=> '12+',
            'publisher' => 'FryxGames',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Carcassonne',
            'creator' => 'Klaus-Jürgen Wrede',
            'release' => '2000-05-12',
            'max_num_players' => '5',
            'min_num_players' => '2',
            'playing_time' => '30-45 Min',
            'ages'=> '7+',
            'publisher' => 'Hans im Gluck',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Agricola',
            'creator' => 'Uwe Rosenberg',
            'release' => '2007-03-02',
            'max_num_players' => '5',
            'min_num_players' => '1',
            'playing_time' => '30-150 Min',
            'ages'=> '12+',
            'publisher' => 'Lookout Games',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Terra Mystica',
            'creator' => 'Jens Struggen',
            'release' => '2012-08-02',
            'max_num_players' => '8',
            'min_num_players' => '3',
            'playing_time' => '60-150 Min',
            'ages'=> '12+',
            'publisher' => 'Feuerland Spiele',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Root',
            'creator' => 'Cole Wehrle',
            'release' => '2018-06-07',
            'max_num_players' => '4',
            'min_num_players' => '2',
            'playing_time' => '60-90 Min',
            'ages'=> '10+',
            'publisher' => 'Leder Games',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Puerto Rico',
            'creator' => 'Andreas Seyfran',
            'release' => '2002-03-02',
            'max_num_players' => '5',
            'min_num_players' => '3',
            'playing_time' => '90-150 Min',
            'ages'=> '12+',
            'publisher' => 'Ravensburger',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('boardgames')->insert([
            'title' => 'Azul',
            'creator' => 'Michael Kiesling',
            'release' => '2017-06-01',
            'max_num_players' => '4',
            'min_num_players' => '2',
            'playing_time' => '30-45 Min',
            'ages'=> '8+',
            'publisher' => 'Next Move Games',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);



        $this->command->info('Boardgames añadidas correctamente');
    }
}

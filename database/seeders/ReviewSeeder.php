<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Review::factory(100)->create();

        DB::table('reviews')->insert([
            'reviewer' => '1',
            'boardgame_id' => '2',
            'score'=>'4',
            'opinion' => 'Esperaba más, la verdad. Las reseñas que vi lo pintaban mucho mejor.',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('reviews')->insert([
            'reviewer' => '2',
            'boardgame_id' => '1',
            'score'=>'6',
            'opinion' => 'Bueno, se deja jugar. Los hay mejores.',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('reviews')->insert([
            'reviewer' => '3',
            'boardgame_id' => '2',
            'score'=>'10',
            'opinion' => 'Probablemente el mejor juego de la historia.',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('reviews')->insert([
            'reviewer' => '4',
            'boardgame_id' => '3',
            'score'=>'9',
            'opinion' => 'Estoy contando las horas para volver a jugar!',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            'reviewer' => '5',
            'boardgame_id' => '4',
            'score'=>'2',
            'opinion' => 'Lo peor que me he echado en cara en mucho tiempo',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('reviews')->insert([
            'reviewer' => '1',
            'boardgame_id' => '4',
            'score'=>'7',
            'opinion' => 'Sorprendentemente divertido!',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('reviews')->insert([
            'reviewer' => '2',
            'boardgame_id' => '7',
            'score'=>'5',
            'opinion' => 'Para pasar el rato. Hay juegos mejores.',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('reviews')->insert([
            'reviewer' => '2',
            'boardgame_id' => '5',
            'score'=>'10',
            'opinion' => 'SIN PALABRAS, OBRA MAESTRA',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $this->command->info('Reviews añadidas correctamente');
    }
}

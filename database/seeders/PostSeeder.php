<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Post::factory(10)->create();

        DB::table('posts')->insert([
            'poster' => '1',
            'post_text' => 'Hola jugadores! Recordad que el próximo viernes tenemos torneo de Catán, ¡no os lo perdáis!',
            'title'=>'Torneo de Catan',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'poster' => '2',
            'post_text' => 'Saludos compañeros! Esta semana la sede permanecerá cerrada por obras, lo sentimos mucho.',
            'title'=>'Obras en la sede',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'poster' => '1',
            'post_text' => 'Hola jugadores! El próximo miércoles tendremos una quedada al aire libre para tomar algo en el campo y por supuesto jugar un poquito :)',
            'title'=>'Juegos al aire libre',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'poster' => '1',
            'post_text' => 'Hola jugadores! Os damos la bienvenida a todos los nuevos usuarios que casualmente tenéis como nick palabras aleatorias en latin!',
            'title'=>'Nuevos Socios',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $this->command->info('Posts añadidos correctamente');
    }
}

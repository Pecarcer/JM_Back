<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Comment::factory(100)->create();

        DB::table('comments')->insert([
            'author' => '2',
            'review_id' => '1',
            'commentary' => 'Pues muy bien dicho',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'author' => '3',
            'review_id' => '1',
            'commentary' => 'Bueno cada uno tiene su opinion',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('comments')->insert([
            'author' => '4',
            'review_id' => '1',
            'commentary' => 'No está hecha la miel para la boca del burro',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'author' => '8',
            'review_id' => '1',
            'commentary' => 'Tan acertado como siempre!',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'author' => '7',
            'review_id' => '2',
            'commentary' => 'Yo creo que te has emocionao',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'author' => '6',
            'review_id' => '2',
            'commentary' => 'QUÉ DICES??',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'author' => '5',
            'review_id' => '3',
            'commentary' => 'Bueno si tu lo dices',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'author' => '3',
            'review_id' => '6',
            'commentary' => 'No sé yo...',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'author' => '1',
            'review_id' => '6',
            'commentary' => 'PERO CÓMO PUEDES DECIR ESO',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'author' => '9',
            'review_id' => '1',
            'commentary' => 'Me han entrado ganas de jugarlo!',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        $this->command->info('Comments añadidos correctamente');

    }
}

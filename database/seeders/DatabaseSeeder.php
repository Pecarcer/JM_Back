<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BoardgameSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PlayerSeeder::class);
        $this->call(DebtorSeeder::class);
    }
}

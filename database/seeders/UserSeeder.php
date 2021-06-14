<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'nick' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'admin',
            'fullname' => 'José Carmona Cervera',
            'remember_token' => 'rememberJCC',
        ]);

        DB::table('users')->insert([
            'nick' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'admin',
            'fullname' => 'Juan Martinez Lopez',
            'remember_token' => 'rememberJML',
        ]);


        User::factory(50)->create();


        $this->command->info('Usuarios añadidos correctamente');
    }
}

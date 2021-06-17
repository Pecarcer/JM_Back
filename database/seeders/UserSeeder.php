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
            'role' => 'Admin',
            'fullname' => 'José Carmona Cervera',
            'remember_token' => 'rememberJCC',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'nick' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'Admin',
            'fullname' => 'Juan Martinez Lopez',
            'remember_token' => 'rememberJML',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);


        User::factory(50)->create();


        $this->command->info('Usuarios añadidos correctamente');
    }
}

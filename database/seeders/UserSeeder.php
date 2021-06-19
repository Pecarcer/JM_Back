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

        DB::table('users')->insert([
            'nick' => 'JulianDado',
            'email' => 'a@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'User',
            'fullname' => 'Juan Martinez Lopez',
            'remember_token' => 'remember',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'nick' => 'MartaCartas',
            'email' => 'b@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'User',
            'fullname' => 'Marta Perez Benitez',
            'remember_token' => 'remembermpb',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'nick' => 'MariaFicha',
            'email' => 'c@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'User',
            'fullname' => 'Maria Lopez Comez',
            'remember_token' => 'remembermlc',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'nick' => 'AlbertoTablero',
            'email' => 'd@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'User',
            'fullname' => 'Alberto Gonzalez Perez',
            'remember_token' => 'rememberagp',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'nick' => 'CasimiroParchis',
            'email' => 'e@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'User',
            'fullname' => 'Casimiro Martinez Lopez',
            'remember_token' => 'remembercml',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'nick' => 'PalomaCluedo',
            'email' => 'f@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'User',
            'fullname' => 'Paloma Martinez Lopez',
            'remember_token' => 'rememberpml',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'nick' => 'FernandoMonopoly',
            'email' => 'g@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'User',
            'fullname' => 'Fernando Fernanez Fernandoz',
            'remember_token' => 'rememberfff',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'nick' => 'ManuelAjedrez',
            'email' => 'h@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("1234"),
            'role' => 'User',
            'fullname' => 'Manuel Martinez Lopez',
            'remember_token' => 'remembermml',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        //User::factory(50)->create();


        $this->command->info('Usuarios añadidos correctamente');
    }
}

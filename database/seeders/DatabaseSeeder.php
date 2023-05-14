<?php

namespace Database\Seeders;

use DB;
use App\Models\RandomNumber;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    "nom" => "admin",
                    "prenom" => "admin",
                    "email" => "admin@gmail.com",
                    "numTel" => 87445566,
                    "cin" => 12345656   ,
                    "role" => json_encode(['ROLE_ADMIN' => true]),
                    "password" => Hash::make("adminadmin"),
                    "date_naissance" => "1983-03-06 15:18:39"
                ],
                [
                    "nom" => "client",
                    "prenom" => "client",
                    "email" => "client@gmail.com",
                    "numTel" => 87445556,
                    "cin" => 12345646   ,
                    "role" => json_encode(['ROLE_CLIENT' => true]),
                    "password" => Hash::make("adminadmin"),
                    "date_naissance" => "1983-03-06 15:18:39"
                ]
            ]
        );
        // \App\Models\User::factory(4)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Salle::factory(5)->create();
        \App\Models\Activity::factory(4)->create();
        \App\Models\Seance::factory(10)->create();
        \App\Models\Abonnement::factory(3)->create();
        \App\Models\UsersAbonnement::factory(3)->create();
        \App\Models\AbonnementActivity::factory(3)->create();
        
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'id'=>1,
            'name'=>'solorzano villanueva',
            'email' => 'admin@gmail.com',
            'email_verified_at'=>null,
            'password'=>bcrypt('password'),
            'remember_token' => str::random(10)
        ]);

        User::create([
            'id'=>2,
            'name'=>'Benites Solano',
            'email' => 'benitessolano@gmail.com',
            'email_verified_at'=>null,
            'password'=>bcrypt('password'),
            'remember_token' => str::random(10)
        ]);

        User::create([
            'id'=>3,
            'name'=>'Agustin Villacorta',
            'email' => 'agustinv@gmail.com',
            'email_verified_at'=>null,
            'password'=>bcrypt('password'),
            'remember_token' => str::random(10)
        ]);
        User::create([
            'id'=>4,
            'name'=>'Avalos Lozano',
            'email' => 'avaloslozano@gmail.com',
            'email_verified_at'=>null,
            'password'=>bcrypt('password'),
            'remember_token' => str::random(10)
        ]);
    }
}

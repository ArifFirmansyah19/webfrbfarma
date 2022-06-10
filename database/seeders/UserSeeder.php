<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

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
        User::truncate();
        User::create([
            'name'=> 'Admin FRB',
            'level'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
            'remember_token'=>Str::random(60),
        ]);
        User::create([
            'name'=> 'Arif Chandra Firmansyah',
            'level'=>'pengguna',
            'email'=>'arif@gmail.com',
            'password'=>bcrypt('arif'),
            'remember_token'=>Str::random(60),
        ]);
        User::create([
            'name'=> 'Najmi Laila',
            'level'=>'pengguna',
            'email'=>'najmi@gmail.com',
            'password'=>bcrypt('najmi'),
            'remember_token'=>Str::random(60),
        ]);
        User::create([
            'name'=> 'Delvit Armadani',
            'level'=>'pengguna',
            'email'=>'delvit@gmail.com',
            'password'=>bcrypt('delvit'),
            'remember_token'=>Str::random(60),
        ]);
        User::create([
            'name'=> 'Mutiah Syajanah',
            'level'=>'pengguna',
            'email'=>'mutiah@gmail.com',
            'password'=>bcrypt('mutiah'),
            'remember_token'=>Str::random(60),
        ]);
        User::create([
            'name'=> 'Putri Roslin',
            'level'=>'pengguna',
            'email'=>'putri@gmail.com',
            'password'=>bcrypt('putri'),
            'remember_token'=>Str::random(60),
        ]);
    }
}

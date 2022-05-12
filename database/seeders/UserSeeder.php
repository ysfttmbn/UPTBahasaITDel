<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'username' => 'admin',
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
                'isAdmin' => true

            ],
            [
                'username' => 'yosafattambun',
                'name' => 'Yosafat Tambun',
                'email' => 'yosafathtambun@gmail.com',
                'password' => Hash::make('yosafattambun'),
                'isAdmin' => false

            ],
            [
                'username' => 'julianti117',
                'name' => 'Julianti Sitorus',
                'email' => 'juliantisitorus071@gmail.com',
                'password' => Hash::make('julianti117'),
                'isAdmin' => false

            ],
            [
                'username' => 'pandiganteng',
                'name' => 'Krisna Saragih',
                'email' => 'gantengbanget123@gmail.com',
                'password' => Hash::make('pandiganteng'),
                'isAdmin' => false

            ],
            [
                'username' => 'sandropangihutan',
                'name' => 'Sandro Panjaitan',
                'email' => 'sandro123@gmail.com',
                'password' => Hash::make('sandropangihutan'),
                'isAdmin' => false

            ],
        );
        foreach($data AS $d){
            User::create([
                'username' => $d['username'],
                'name' => $d['name'],
                'email' => $d['email'],
                'password' => $d['password'],
                'isAdmin' => $d['isAdmin']
            ]);
        }
    }
}
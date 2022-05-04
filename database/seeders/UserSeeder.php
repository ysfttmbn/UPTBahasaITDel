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
                'password' => Hash::make('Yosafat123:'),
                'isAdmin' => false

            ],
            [
                'username' => 'julianti117',
                'name' => 'julianti sitorus',
                'email' => 'juliantisitorus071@gmail.com',
                'password' => Hash::make('if321056'),
                'isAdmin' => false

            ]
        );
        foreach($data AS $d){
            User::create([
                'username' => $d['username'],
                'email' => $d['email'],
                'password' => $d['password'],
                'isAdmin' => $d['isAdmin']
            ]);
        }
    }
}
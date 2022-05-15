<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
               'role' => 'Masyarakat'
            ],
            [
                'role' => 'Mahasiswa'
            ],
            [
                'role' => 'Dosen/Staff'
            ],
            [
                'role' => 'Administrator'
            ]
        );

        foreach($data AS $d){
            Role::create([
                'role' => $d['role']
            ]);
        }
    }
}

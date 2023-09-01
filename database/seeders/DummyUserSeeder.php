<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name'       => 'Admin',
                'email'      => 'admin@gmail.com',
                'role'       => 'admin',
                'password'   => bcrypt('111')
            ],
            [
                'name'       => 'Dokter',
                'email'      => 'dokter@gmail.com',
                'role'       => 'dokter',
                'password'   => bcrypt('222')
            ],
            [
                'name'       => 'Pasien',
                'email'      => 'pasien@gmail.com',
                'role'       => 'pasien',
                'password'   => bcrypt('333')
            ],
            // [
            //     'name'       => 'A',
            //     'email'      => 'a@gmail.com',
            //     'role'       => 'pasien',
            //     'password'   => '333'
            // ]
        ];

        foreach ($user as $key => $val) {
            User::create($val);
        }
    }
}

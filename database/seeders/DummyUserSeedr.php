<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUserSeedr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'adminn',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('123456')

            ],

            [
                'name'=>'Fadli',
                'email'=>'petugas@gmail.com',
                'role'=>'petugas',
                'password'=> bcrypt('123456')

            ],

            [
                'name'=>'Ilalika',
                'email'=>'guru@gmail.com',
                'role'=>'guru',
                'password'=> bcrypt('123456')

            ],

            [
                'name'=>'Usep',
                'email'=>'usep@gmail.com',
                'role'=>'siswa',
                'password'=> bcrypt('123456')

            ],

            
        ];

        foreach($userData as $key => $val){
            User::create($val);
        };
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['id'=> '1',
             'name' => 'admin',
             'email' => 'admin',
             'password' => Hash::make('123'),
             'role_id'=>1
            ],
             [ 
                'id'=> '2',
                'name' => 'user',
             'email' => 'user',
             'password' => Hash::make('123'),
             'role_id'=>2
             ]
         ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([

 
            [
                'username' => 'Member',
                'email' => 'member@gmail.com',
                'password' => Hash::make('member'),
                'phone_number' => '0832232134',
                'address' => '12th Member St.',
                'type' => 'member'
            ],

            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'phone_number' => '0232442123',
                'address' => '12th Admin St.',
                'type' => 'admin'
            ]
         ]);
    }
}

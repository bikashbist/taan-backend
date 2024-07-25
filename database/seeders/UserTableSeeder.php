<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
               'name' => 'Admin',
               'username' => 'admin',
               'email' => 'admin@admin.com',
               'password' => Hash::make('admin@123'),
               'role' => 'admin',
               'status' => 'active',

            ],
              //member
            [
                'name' => 'Member',
                'username' => 'member',
                'email' => 'member@member.com',
                'password' => Hash::make('member@123'),
                'role' => 'member',
                'status' => 'active',

            ]

        ]);
       
       
    
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    public function run(): void
    {

        DB::table('users')->updateOrInsert(
            ['email' => 'admin@example.com'],
            [
                'info_id' => 1,
                'name' => 'Rigoberto Admin',
                'paternal_surname' => 'Admin',
                'maternal_surname' => 'User',
                'email' => 'admin@example.com',
                'phone' => '1234567890',
                'address' => '123 Admin St, City, Country',
                'level' => 'admin',
                'password' => Hash::make('adminpassword'),
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'user@example.com'],
            [
                'info_id' => 2,
                'name' => 'Pedro Regular',
                'paternal_surname' => 'Regular',
                'maternal_surname' => 'User',
                'email' => 'user@example.com',
                'phone' => '0987654321',
                'address' => '456 User Ave, City, Country',
                'level' => 'user',
                'password' => Hash::make('userpassword'),
            ]
        );
        
        DB::table('users')->updateOrInsert(
            ['email' => 'architect@example.com'],
            [
                'info_id' => 3,
                'name' => 'Alex Architect',
                'paternal_surname' => 'Architect',
                'maternal_surname' => 'User',
                'email' => 'architect@example.com',
                'phone' => '1122334455',
                'address' => '789 Architect Blvd, City, Country',
                'level' => 'architect',
                'password' => Hash::make('architectpassword'),
            ]
        );
        
        DB::table('users')->updateOrInsert(
            ['email' => 'luis.architect@example.com'],
            [
                'info_id' => 4,
                'name' => 'Luis Architect',
                'paternal_surname' => 'Architect',
                'maternal_surname' => 'User',
                'email' => 'luis.architect@example.com',
                'phone' => '2233445566',
                'address' => '321 Architect Way, City, Country',
                'level' => 'architect',
                'password' => Hash::make('architectpassword'),
            ]
        );
    }
}

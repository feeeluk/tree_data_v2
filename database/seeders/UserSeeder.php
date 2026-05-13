<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
    [
        'username' => 'Dave',
        'email' => null,
        'f_name' => 'Dave',
        'l_name' => 'Davidson',
        'address_line_1' => null,
        'address_line_2' => null,
        'city' => null,
        'postcode' => null,
        'mobile' => null,
        'password' => Hash::make('test'),
        'is_admin' => false,
        'image' => 'user_template.png',
        'remember_token' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'username' => 'John',
        'email' => null,
        'f_name' => 'John',
        'l_name' => 'Johnson',
        'address_line_1' => null,
        'address_line_2' => null,
        'city' => null,
        'postcode' => null,
        'mobile' => null,
        'password' => Hash::make('test'),
        'is_admin' => false,
        'image' => 'user_template.png',
        'remember_token' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'username' => 'Robert',
        'email' => null,
        'f_name' => 'Robert',
        'l_name' => 'Robertson',
        'address_line_1' => null,
        'address_line_2' => null,
        'city' => null,
        'postcode' => null,
        'mobile' => null,
        'password' => Hash::make('test'),
        'is_admin' => false,
        'image' => 'user_template.png',
        'remember_token' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'username' => 'Steve',
        'email' => null,
        'f_name' => 'Steve',
        'l_name' => 'Stevenson',
        'address_line_1' => null,
        'address_line_2' => null,
        'city' => null,
        'postcode' => null,
        'mobile' => null,
        'password' => Hash::make('test'),
        'is_admin' => false,
        'image' => 'user_template.png',
        'remember_token' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'username' => 'Loz',
        'email' => null,
        'f_name' => 'Laurence',
        'l_name' => 'Smith',
        'address_line_1' => null,
        'address_line_2' => null,
        'city' => null,
        'postcode' => null,
        'mobile' => null,
        'password' => Hash::make('test'),
        'is_admin' => true,
        'image' => 'user_template.png',
        'remember_token' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
                'phone' => '0345444322',
                'password' => Hash::make('admin'),
                'user_name' => 'tho',
                'gender' => 'Nam',
                'date_of_birth' => Carbon::parse('2000-11-08'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone' => '0312345678',
                'password' => Hash::make('123456'),
                'user_name' => 'jeny',
                'gender' => 'Nữ',
                'date_of_birth' => Carbon::parse('2003-01-02'),
                'role' => 'writer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone' => '0343241472',
                'password' => Hash::make('123456'),
                'user_name' => 'john',
                'gender' => 'Nam',
                'date_of_birth' => Carbon::parse('2002-10-01'),
                'role' => 'writer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone' => '0348241492',
                'password' => Hash::make('123456'),
                'user_name' => 'jame',
                'gender' => 'Nam',
                'date_of_birth' => Carbon::parse('2002-06-10'),
                'role' => 'writer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

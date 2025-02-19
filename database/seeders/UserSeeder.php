<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('rahasia'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => Hash::make('rahasia'),
            'role_id' => 2
        ]);
    }
}
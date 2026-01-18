<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin12345'),
                'role_id' => 1,
            ],
            [
                'name' => 'Putri Amelia',
                'email' => '194ameliaputri@gmail.com',
                'password' => Hash::make('putri12345'),
                'role_id' => 2,
            ],
            [
                'name' => 'Vicke Via Prakusya',
                'email' => 'vickeviaprakusya@gmail.com',
                'password' => Hash::make('vicke12345'),
                'role_id' => 2,
            ],
        ]);
    }
}

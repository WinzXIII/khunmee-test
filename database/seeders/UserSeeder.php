<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'Test1', 'email' => 'test1@email.com', 'password' => Hash::make('123456')]);
        User::create(['name' => 'Test2', 'email' => 'test2@email.com', 'password' => Hash::make('123456')]);
        User::create(['name' => 'Test3', 'email' => 'test3@email.com', 'password' => Hash::make('123456')]);
    }
}

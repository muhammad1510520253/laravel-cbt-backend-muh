<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin Muh',
            'email' => 'Muh@gmail.com',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'phone' =>'0123456789',
        ]);
    }
}

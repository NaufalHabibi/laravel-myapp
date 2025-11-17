<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Default Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role' => 'admin',
            'alamat' => 'Alamat Admin',
            'telepon' => '081234567890',
        ]);

        // Default Customer
        User::create([
            'name' => 'Customer User',
            'email' => 'customer@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'role' => 'customer',
            'alamat' => 'Alamat Customer',
            'telepon' => '089876543210',
        ]);
    }
}

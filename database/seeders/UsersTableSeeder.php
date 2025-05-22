<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Administrador
        User::create([
            'name' => 'Carlos',
            'last_name' => 'Ramírez',
            'gender' => 'male',
            'date_birth' => '1990-05-20',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Analista
        User::create([
            'name' => 'Lucía',
            'last_name' => 'Gómez',
            'gender' => 'female',
            'date_birth' => '1992-08-12',
            'email' => 'analista@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'analista',
        ]);

        // Inversor
        User::create([
            'name' => 'Diego',
            'last_name' => 'Pérez',
            'gender' => 'male',
            'date_birth' => '1995-03-10',
            'email' => 'inversor@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'inversor',
        ]);
    }
}

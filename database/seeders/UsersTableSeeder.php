<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
{
    User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('password'),
        'role' => 'admin',
    ]);

    User::create([
        'name' => 'Inversor',
        'email' => 'inversor@example.com',
        'password' => Hash::make('password'),
        'role' => 'inversor',
    ]);

    User::create([
        'name' => 'Analista',
        'email' => 'analista@example.com',
        'password' => Hash::make('password'),
        'role' => 'analista',
    ]);
}
}

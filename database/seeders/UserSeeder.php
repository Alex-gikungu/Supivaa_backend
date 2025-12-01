<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Update or create ensures no duplicate email error
        User::updateOrCreate(
            ['email' => 'admin@supivaa.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('Admin123'),
                'role' => 'admin',
            ]
        );
    }
}

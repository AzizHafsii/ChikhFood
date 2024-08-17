<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@food.com',
            'password' => bcrypt('Aziz@123'),
            'is_admin' => true,
        ]);
    }
}
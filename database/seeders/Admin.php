<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Admin::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'image' => null,
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
    }
}

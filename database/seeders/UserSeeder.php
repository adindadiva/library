<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'username'=> 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'petugas',
            'username' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'peminjam',
            'username' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ]);
    }
}

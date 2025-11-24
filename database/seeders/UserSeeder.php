<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin Kopi Senja',
                'email' => 'admin@kopisenja.com',
                'password' => Hash::make('password123'),
                'role_id' => 3, // admin
                'phone' => '081234567890',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kasir 1',
                'email' => 'kasir1@kopisenja.com',
                'password' => Hash::make('kasir123'),
                'role_id' => 2, // kasir
                'phone' => '081234567891',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Customer Test',
                'email' => 'customer@test.com',
                'password' => Hash::make('customer123'),
                'role_id' => 1, // customer
                'phone' => '081234567892',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('users')->insert($users);
    }
}

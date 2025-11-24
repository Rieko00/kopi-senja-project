<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name_role' => 'customer',
                'description' => 'Customer dapat memesan menu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'kasir',
                'description' => 'Kasir cafe dapat memproses pesanan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'admin',
                'description' => 'Administrator cafe dengan akses penuh',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}

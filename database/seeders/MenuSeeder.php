<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // Sample menus untuk testing
        $menus = [
            // Coffee Category (ID: 1)
            [
                'name' => 'Americano',
                'description' => 'Kopi hitam dengan rasa yang kuat',
                'price' => 18000,
                'category_id' => 1,
                'is_available' => true,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cappuccino',
                'description' => 'Espresso dengan susu panas dan foam',
                'price' => 25000,
                'category_id' => 1,
                'is_available' => true,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Latte',
                'description' => 'Espresso dengan susu steamed',
                'price' => 28000,
                'category_id' => 1,
                'is_available' => true,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Non-Coffee Category (ID: 2)
            [
                'name' => 'Es Teh Manis',
                'description' => 'Teh manis dingin segar',
                'price' => 8000,
                'category_id' => 2,
                'is_available' => true,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chocolate Hot',
                'description' => 'Cokelat panas dengan whipped cream',
                'price' => 22000,
                'category_id' => 2,
                'is_available' => true,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Snacks Category (ID: 3)
            [
                'name' => 'Croissant',
                'description' => 'Roti croissant butter segar',
                'price' => 15000,
                'category_id' => 3,
                'is_available' => true,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sandwich Club',
                'description' => 'Sandwich dengan isian lengkap',
                'price' => 35000,
                'category_id' => 4,
                'is_available' => true,
                'stock' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('menus')->insert($menus);
    }
}

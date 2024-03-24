<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LookupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lookups')->insert([
            [
                'key' => 'brands',
                'name' => 'Brands',
                'description' => 'List of brands referred to by products',
                'data' => json_encode([
                    ['key' => 1, 'name' => 'adidas', 'value' => 'Adidas'],
                    ['key' => 2, 'name' => 'nike', 'value' => 'Nike'],
                    ['key' => 3, 'name' => 'columbia', 'value' => 'Columbia'],
                ])

            ],
            [
                'key' => 'categories',
                'name' => 'Categories',
                'description' => 'List of product categories',
                'data' => json_encode([
                    ['key' => 1, 'name' => 'clothing', 'value' => 'Clothing'],
                    [
                        'key' => 2,
                        'name' => 'electronics',
                        'value' => 'Electronics'
                    ],
                    [
                        'key' => 3,
                        'name' => 'wares',
                        'value' => 'Wares'
                    ],
                    [
                        'key' => 4,
                        'name' => 'books',
                        'value' => 'Books'
                    ],
                    [
                        'key' => 5,
                        'name' => 'sports',
                        'value' => 'Sports'
                    ],
                    [
                        'key' => 6,
                        'name' => 'food',
                        'value' => 'Food'
                    ],
                    [
                        'key' => 7,
                        'name' => 'home',
                        'value' => 'Home'
                    ],
                    [
                        'key' => 8,
                        'name' => 'toys',
                        'value' => 'Toys'
                    ],
                    [
                        'key' => 9,
                        'name' => 'beauty',
                        'value' => 'Beauty'
                    ],
                    [
                        'key' => 10,
                        'name' => 'health',
                        'value' => 'Health'
                    ],
                    [
                        'key' => 11,
                        'name' => 'pets',
                        'value' => 'Pets'
                    ]
                ])
            ],
            [
                'key' => 'sizes',
                'name' => 'Sizes',
                'description' => 'List of product sizes',
                'data' => json_encode([
                    [
                        'key' => 1,
                        'name' => 'Extra Small',
                        'value' => 'XS'
                    ],
                    [
                        'key' => 2,
                        'name' => 'Small',
                        'value' => 'S'
                    ],
                    [
                        'key' => 3,
                        'name' => 'Medium',
                        'value' => 'M'
                    ],
                    [
                        'key' => 4,
                        'name' => 'Large',
                        'value' => 'L'
                    ],
                    [
                        'key' => 5,
                        'name' => 'Extra Large',
                        'value' => 'XL'
                    ],
                    [
                        'key' => 6,
                        'name' => 'Extra Extra Large',
                        'value' => 'XXL'
                    ],
                ])
            ]
        ]);
    }
}

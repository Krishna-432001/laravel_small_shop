<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id'=> 1,
                'brand_id'=> 1,
                'name'=> 'Note 30 5g',
                'price'=> 100
            ],
            [
                'category_id'=> 1,
                'brand_id'=> 2,
                'name'=> 'Redmi Note 13',
                'price'=> 1003
            ],
            [
                'category_id'=> 1,
                'brand_id'=> 3,
                'name'=> 'Realme 12',
                'price'=> 1002
            ],
            [
                'category_id'=> 1,
                'brand_id'=> 4,
                'name'=> 'Vivo V13',
                'price'=> 1001
            ],
            [
                'category_id'=> 1,
                'brand_id'=> 5,
                'name'=> 'Samsung S24 Ultra',
                'price'=> 1000
            ],
            [
                'category_id'=> 2,
                'brand_id'=> 6,
                'name'=> 'Dell XPS 13',
                'price'=> 1200
            ],
            [
                'category_id'=> 2,
                'brand_id'=> 7,
                'name'=> 'MacBook Pro M1',
                'price'=> 1500
            ],
            [
                'category_id'=> 2,
                'brand_id'=> 8,
                'name'=> 'HP Spectre x360',
                'price'=> 1100
            ],
            [
                'category_id'=> 3,
                'brand_id'=> 9,
                'name'=> 'LG Dual Inverter AC',
                'price'=> 600
            ],
            [
                'category_id'=> 3,
                'brand_id'=> 10,
                'name'=> 'Samsung Wind-Free AC',
                'price'=> 700
            ],
            [
                'category_id'=> 4,
                'brand_id'=> 11,
                'name'=> 'Bajaj Ceiling Fan',
                'price'=> 50
            ],
            [
                'category_id'=> 4,
                'brand_id'=> 12,
                'name'=> 'Usha Mist Air Fan',
                'price'=> 45
            ],
            [
                'category_id'=> 5,
                'brand_id'=> 13,
                'name'=> 'LG 260L Double Door Fridge',
                'price'=> 500
            ],
            [
                'category_id'=> 5,
                'brand_id'=> 14,
                'name'=> 'Whirlpool 240L Fridge',
                'price'=> 450
            ]
        ];
        
        product::insert($products);
    }
}

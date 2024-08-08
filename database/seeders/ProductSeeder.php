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
                'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'Note 30 5g',
                'price'=>100
            ],
            [
                  'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'redmi note 13',
                'price'=>1003
            ],
            [  'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'realme 12',
                'price'=>1002
            ],
            [  'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'vivo v13',
                'price'=>1001
            ],
            [  'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'samsung s24 ultra',
                'price'=>1000
                ]
        ];
        product::insert($products);
    }
}

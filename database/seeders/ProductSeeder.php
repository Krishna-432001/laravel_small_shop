<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all categories
        $categories = Category::all()->keyBy('name');

        $products = [
            [
                'category_id'=> $categories['Smartphones']->id,
                'brand_id'=> 1,
                'name'=> 'Note 30 5g',
                'price'=> 100,
                'image_path'=> 'images/products/note_30_5g.jpg'
            ],
            [
                'category_id'=> $categories['Smartphones']->id,
                'brand_id'=> 2,
                'name'=> 'Redmi Note 13',
                'price'=> 1003,
                'image_path'=> 'images/products/redmi_note_13.jpg'
            ],
            [
                'category_id'=> $categories['Smartphones']->id,
                'brand_id'=> 3,
                'name'=> 'Realme 12',
                'price'=> 1002,
                'image_path'=> 'images/products/realme_12.jpg'
            ],
            [
                'category_id'=> $categories['Smartphones']->id,
                'brand_id'=> 4,
                'name'=> 'Vivo V13',
                'price'=> 1001,
                'image_path'=> 'images/products/vivo_v13.jpg'
            ],
            [
                'category_id'=> $categories['Smartphones']->id,
                'brand_id'=> 5,
                'name'=> 'Samsung S24 Ultra',
                'price'=> 1000,
                'image_path'=> 'images/products/samsung_s24_ultra.jpg'
            ],
            [
                'category_id'=> $categories['Laptops']->id,
                'brand_id'=> 6,
                'name'=> 'Dell XPS 13',
                'price'=> 1200,
                'image_path'=> 'images/products/dell_xps_13.jpg'
            ],
            [
                'category_id'=> $categories['Laptops']->id,
                'brand_id'=> 7,
                'name'=> 'MacBook Pro M1',
                'price'=> 1500,
                'image_path'=> 'images/products/macbook_pro_m1.jpg'
            ],
            [
                'category_id'=> $categories['Laptops']->id,
                'brand_id'=> 8,
                'name'=> 'HP Spectre x360',
                'price'=> 1100,
                'image_path'=> 'images/products/hp_spectre_x360.jpg'
            ],
            [
                'category_id'=> $categories['Air Conditioners']->id,
                'brand_id'=> 9,
                'name'=> 'LG Dual Inverter AC',
                'price'=> 600,
                'image_path'=> 'images/products/lg_dual_inverter_ac.jpg'
            ],
            [
                'category_id'=> $categories['Air Conditioners']->id,
                'brand_id'=> 10,
                'name'=> 'Samsung Wind-Free AC',
                'price'=> 700,
                'image_path'=> 'images/products/samsung_wind_free_ac.jpg'
            ],
            [
                'category_id'=> $categories['Fans']->id,
                'brand_id'=> 11,
                'name'=> 'Bajaj Ceiling Fan',
                'price'=> 50,
                'image_path'=> 'images/products/bajaj_ceiling_fan.jpg'
            ],
            [
                'category_id'=> $categories['Fans']->id,
                'brand_id'=> 12,
                'name'=> 'Usha Mist Air Fan',
                'price'=> 45,
                'image_path'=> 'images/products/usha_mist_air_fan.jpg'
            ],
            [
                'category_id'=> $categories['Refrigerators']->id,
                'brand_id'=> 13,
                'name'=> 'LG 260L Double Door Fridge',
                'price'=> 500,
                'image_path'=> 'images/products/lg_260l_double_door_fridge.jpg'
            ],
            [
                'category_id'=> $categories['Refrigerators']->id,
                'brand_id'=> 14,
                'name'=> 'Whirlpool 240L Fridge',
                'price'=> 450,
                'image_path'=> 'images/products/whirlpool_240l_fridge.jpg'
            ]
        ];
        
        Product::insert($products);
    }
}

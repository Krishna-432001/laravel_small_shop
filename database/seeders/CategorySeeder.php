<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            ['name'=>'TV'],
            ['name'=>'Laptop'],
            ['name'=>'AC'],
            ['name'=>'Fan'],
            ['name'=>'Fridge'],
        ];
        // Category::insert($categories);

        foreach ($categories as $row) 
        {
            Category::create($row);
        }
    }
}

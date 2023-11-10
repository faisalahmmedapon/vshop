<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "title" => "Tempor officia nulla enim ea consequat sunt sit commodo anim cillum.",
                "price"=> 20.10,
                "quantity" => 100,
                "inStock" => 100,
                "category_id"=> 1,
                "brand_id"=> 1,
                "description" => "Tempor officia nulla enim ea consequat sunt sit commodo anim cillum.",

            ],
            [
                "title" => "Tempor officia nulla enim ea consequat sunt sit commodo anim cillum 2",
                "price"=> 22.22,
                "quantity" => 102,
                "inStock" => 100,
                "category_id"=> 2,
                "brand_id"=> 2,
                "description" => "Tempor officia nulla enim ea consequat sunt sit commodo anim cillum.",

            ],
            [
                "title" => "Tempor officia nulla enim ea consequat sunt sit commodo anim cillum 3",
                "price"=> 23.33,
                "quantity" => 103,
                "inStock" => 100,
                "category_id"=> 3,
                "brand_id"=> 3,
                "description" => "Tempor officia nulla enim ea consequat sunt sit commodo anim cillum.",

            ],
            [
                "title" => "Tempor officia nulla enim ea consequat sunt sit commodo anim cillum 3",
                "price"=> 24.44,
                "quantity" => 104,
                "inStock" => 100,
                "category_id"=> 4,
                "brand_id"=> 4,
                "description" => "Tempor officia nulla enim ea consequat sunt sit commodo anim cillum.",

            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->paragraph(3),
            "price"=> fake()->numberBetween(20,100),
            "quantity" => fake()->numberBetween(2,100),
            "inStock" => fake()->numberBetween(2,100),
            "category_id"=> fake()->numberBetween(1,6),
            "brand_id"=> fake()->numberBetween(1,4),
            "description" => "Discover cutting-edge electronics and redefine innovation with our curated selection of premium gadgets. Explore the latest in smart devices, home automation, and entertainment – where technology meets elegance. Elevate your digital experience with unparalleled quality and style at our electronic eCommerce store. ",
        ];
    }
}

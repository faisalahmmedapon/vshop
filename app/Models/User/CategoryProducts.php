<?php

namespace App\Models\User;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Inertia\Inertia;

class CategoryProducts extends Model
{
    use HasFactory;


    public function category($slug){

        $category_products = Category::with('products','products.brand','products.category','products.product_images',)->where('slug',$slug)->first();
        return Inertia::render("User/CategoryProducts", [
            "category_products"=> $category_products
        ]);

        // return Category::with('products')->where('slug',$slug)->get();
    }


}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return Inertia::render("Admin/Products/Index", [
            "products" => $products,
        ]);
    }


    public function store(Request $request)
    {
        $product = Product::create([
            "title" => $request->title,
            "quantity" => $request->quantity,
            "description" => $request->description,
            "published" => $request->published,
            "price" => $request->price,
            "category_id" => $request->category_id,
            "brand_id" => $request->brand_id,
        ]);


        // check if user uploads images
        if ($request->hasFile("product_images")) {
            $productImages = $request->file("product_images");
            foreach ($productImages as $image) {
                $uniqueName = time()."__".$image->getClientOriginalName();
                $image->move('product_images', $uniqueName);
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product_images/' . $uniqueName,
                ]);
            }
        }

        return redirect()->route('admin.products')->with('success','Product Create Successfully');

        // $product = Product::create($request->all());
    }
}

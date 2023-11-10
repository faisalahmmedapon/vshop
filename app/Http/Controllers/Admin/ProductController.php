<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
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
        $categories = Category::all();
        $brands = Brand::all();

        return Inertia::render("Admin/Products/Index", [
            "products" => $products,
            "categories" => $categories,
            "brands" => $brands,
        ]);
    }


    public function store(Request $request)
    {

        $rules = [
            'title' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
        ];

        // Custom validation messages
        $messages = [
            'category_id.exists' => 'The selected category is invalid.',
            'brand_id.exists' => 'The selected brand is invalid.',
        ];

        // Validate the request
        $request->validate($rules, $messages);

        $product = Product::create([
            "title" => $request->title,
            "quantity" => $request->quantity,
            "description" => $request->description,
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

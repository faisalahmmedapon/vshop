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
        $products = Product::with('category','brand','product_images')->get();
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


        // return $request->all();

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
            "inStock" => $request->quantity,
            "description" => $request->description,
            "price" => $request->price,
            "category_id" => $request->category_id,
            "brand_id" => $request->brand_id,
        ]);

        // check if user uploads images
        if ($request->hasFile("product_images")) {
            $productImages = $request->file("product_images");
            foreach ($productImages as $image) {
                $uniqueName = 'product__'.time().'__product_images.'.$image->getClientOriginalExtension();
                $image->move('product/', $uniqueName);
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product/' . $uniqueName,
                ]);
            }
        }
        // return redirect()->route('admin.products')->with('success','Product Create Successfully');

        // $product = Product::create($request->all());
    }
    public function update(Request $request,$id)
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

        $product = Product::findOrFail($id);
        $product->update([
            "title" => $request->title,
            "quantity" => $request->quantity,
            "inStock" => $request->quantity,
            "description" => $request->description,
            "price" => $request->price,
            "category_id" => $request->category_id,
            "brand_id" => $request->brand_id,
        ]);


        // check if user uploads images
        if ($request->hasFile("product_images")) {
            $productImages = $request->file("product_images");
            foreach ($productImages as $image) {
                $uniqueName = 'product__'.time().'__product_images.'.$image->getClientOriginalExtension();
                $image->move('product/', $uniqueName);
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product/' . $uniqueName,
                ]);
            }
        }

        return redirect()->route('admin.products')->with('success','Product Create Successfully');

        // $product = Product::create($request->all());
    }


        public function show($id){
            $product = Product::with('category','brand','product_images')->findOrFail($id);
            $categories = Category::all();
            $brands = Brand::all();
            return Inertia::render('Admin/Products/Show',[
                'product'=> $product,
                "categories" => $categories,
                "brands" => $brands,
            ]);
        }


        public function destroy($id){
            $product = Product::with('product_images')->findOrFail($id);
            foreach ($product->product_images as $images) {
                @unlink($images->image);
            }

            $product->delete();
        }

        public function remove_image($id){
            $product = ProductImage::findOrFail($id);

            if ($product->image != 'product/product__1700149702__product_images.jpg'){
                @unlink($product->image);
                $product->delete();
            }

            return redirect()->route('admin.products')->with('success','products');

        }


}

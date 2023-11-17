<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        return Inertia::render('Dashboard');
    }

    public function details($slug){
        $product = Product::with('category','brand','product_images')->where('slug', $slug)->first();


        return Inertia::render('User/Product_Details',[
            'product'=> $product
        ]);
    }
}

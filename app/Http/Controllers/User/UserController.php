<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class UserController extends Controller
{

    public function index(){
        $products = Product::with("brand","category","product_images")->latest('id')->limit(10)->get();
        return Inertia::render('User/Index',[
            'products'=> $products,
        ]);
    }

}
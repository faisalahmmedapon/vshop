<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckOutController extends Controller
{
    public function index()
    {

        $carts = Cart::with('product', 'product.product_images')->where('user_id', auth()->user()->id)->get();

        return Inertia::render('User/CheckOut', [
            'carts' => $carts,
        ]);
    }
    public function checkout(Request $request)
    {

        return $request->paymentMethod;

        // $carts = Cart::with('product', 'product.product_images')->where('user_id', auth()->user()->id)->get();

        // return Inertia::render('User/CheckOut', [
        //     'carts' => $carts,
        // ]);
    }







}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Inertia\Inertia;

class AddToCartController extends Controller
{


    public function addToCart($product)
    {

        // return $product;
        $product = Product::findOrFail($product);
        $productId = $product->id;
        $quantity = 1;
        // Check if user is authenticated

        if (Auth::check()) {
            $userId = Auth::id();
            // Save to database
            $cart = Cart::where('user_id', $userId)
                ->where('product_id', $product->id)
                ->first();

            if ($cart) {
                $cart->increment('quantity', 1);
            } else {
                Cart::create([
                    'user_id' => $userId,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                ]);
            }
        } else {

            // Retrieve the existing cart items from the cookie
            $cartItems = Cookie::get('cart_items');

            // Decode the JSON string back into an array (or initialize an empty array)
            $cartItems = json_decode($cartItems, true) ?? [];

            // Add the new item to the cart array
            $cartItems[] = [
                'user_id' => '',
                'product_id' => $productId,
                'quantity' => $quantity,
                'expiration_time' => now()->addMinutes(1)->timestamp,
            ];



            // Filter out items that have expired
            $cartItems = array_filter($cartItems, function ($item) {
                return now()->timestamp <= $item['expiration_time'];
            });


            // Encode the array back to JSON and store it in the cookie
            Cookie::queue('cart_items', json_encode($cartItems));
        }

        return redirect()->back();
    }

    public function cartViews()
    {
        $products = [];
        $carts = [];

        if (!auth()->user()) {

            $cartItems = json_decode(Cookie::get('cart_items'), true);
            if (is_array($cartItems)) {
                $productIds = array_column($cartItems, 'product_id');
                $products = Product::with('product_images')->whereIn('id', $productIds)->get();
            }
        } else {
            $carts = Cart::with('product', 'product.product_images')->where('user_id', auth()->user()->id)->get();
        }

        return Inertia::render('User/Cart', [
            'products' => $products,
            'carts' => $carts,
        ]);
    }


    public function addToCartIncrement($id)
    {
        Cart::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->increment('quantity', 1);
    }


    public function addToCartDecrement($id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();
        if ($cart->quantity > 1) {
            $cart->decrement('quantity', 1);
        }
    }


    public function addToCartRemove($id)
    {
        Cart::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->delete();
    }




    public function updateCartViews()
    {
        $products = [];
        $carts = [];

        if (!auth()->user()) {

            $cartItems = json_decode(Cookie::get('cart_items'), true);
            if (is_array($cartItems)) {
                $productIds = array_column($cartItems, 'product_id');
                $products = Product::with('product_images')->whereIn('id', $productIds)->get();
            }
        } else {
            $carts = Cart::with('product', 'product.product_images')->where('user_id', auth()->user()->id)->get();
        }


        return response()->json([
            'products' => $products,
            'carts' => $carts,
        ]);
    }




    public function removeAllFormCart()

    {
        if (!auth()->user()) {
            // Clear the cart cookie
            Cookie::queue(Cookie::forget('cart_items'));
        } else {
            $carts = Cart::where('user_id', auth()->user()->id)->get();
            foreach ($carts as $cart) {
                $cart->delete();
            }
        }
    }

}
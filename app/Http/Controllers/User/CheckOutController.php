<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // return $request->shipping_address['name'];



        $shipping_address = ShippingAddress::create([
            'name' => $request->shipping_address['name'],
            'email' => $request->shipping_address['email'],
            'phone' => $request->shipping_address['phone'],
            'address_1' => $request->shipping_address['address'],
            'user_id' => Auth::user()->id,
        ]);

        $order = Order::create([
            'invoice_id' => random_int(000000000, 99999999),
            'total_price' => $request->totalAmount,
            'status' => 'pending',
            'user_id' => Auth::user()->id,
            'shipping_id' => $shipping_address->id,
            'payment_method' => $request->paymentMethod,

        ]);


        // place order items from cart database 

        $carts = Cart::with('product', 'product.product_images')->where('user_id', auth()->user()->id)->get();

        foreach ($carts as $cart) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'sell_price' => $cart->product->price,
            ]);
        }




        // check user payment method 

        if($request->paymentMethod == 'cashOnDelivery'){


            $payment = Payment::create([
                'amount' => $request->totalAmount,
                'status' => 'pending',
                'type' => $request->paymentMethod,
                'order_id' => $order->id
            ]);
            return redirect()->route('home');

        }else if($request->paymentMethod == 'stripe'){
            $payment = Payment::create([
                'amount' => $request->totalAmount,
                'status' => 'pending',
                'type' => $request->paymentMethod,
                'order_id' => $order->id
            ]);

            return Inertia::render('User/Payments/Stripe', [
                'carts' => $carts,
            ]);

        }else{
            return redirect()->route('home');
        }



        // $carts = Cart::with('product', 'product.product_images')->where('user_id', auth()->user()->id)->get();

        // return Inertia::render('User/CheckOut', [
        //     'carts' => $carts,
        // ]);
    }
}

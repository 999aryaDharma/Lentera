<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $carts = Cart::with('product')->where('user_id', Auth::user()->id)->get();

        $total = $carts->sum(function ($cart) {
            return $cart->qty * $cart->product->harga;
        });

        return view('checkout', compact('carts', 'total', 'user'));
    }

    
}

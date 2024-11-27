<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CheckoutSingle;
use App\Models\product;
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

    public function indexSingle(string $id)
    {
        $products = product::find($id);

        return view('checkout_single', compact('products'));
    }

    public function storeSingle(Request $request)
    {
        if(Auth::id() == 0){
            return redirect()->route('login');
        } else {
            CheckoutSingle::create([
                'user_id' => Auth::id(), // Pastikan ini user yang login
                'product_id' => $request->product_id,
                'qty' => 1,
            ]);
        }

        return redirect()->route('checkout.single');
    }
}

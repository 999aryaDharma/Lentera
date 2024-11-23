<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $total = $carts->sum(function ($cart) {
            return $cart->qty * $cart->product->harga;
        });
        
        return view('keranjang', compact('carts', 'total'));
        
    }

    public function store(Request $request)
    {
        $duplicate = Cart::where('product_id', $request->product_id)->first();
        if ($duplicate){
            return redirect()->route('cart.index')->with('failed', 'Your products is already in your Cart');
        }
    
        // Tambahkan ke cart
        Cart::create([
            'user_id' => Auth::id(), // Pastikan ini user yang login
            'product_id' => $request->product_id,
            'qty' => 1,
        ]);
    
        return redirect()->route('cart.index')->with('success', 'Product successfully added to your cart');
    }
    
    public function destroy($id)
    {
        $carts = Cart::find($id);

        if ($carts) {
            $carts->delete();
        }

        return redirect()->route('cart.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'qty' => 'required|integer|min:1', // Validasi input
        ]);
    
        $cart = Cart::findOrFail($id); // Cari data cart berdasarkan ID
        $cart->qty = $request->qty; // Perbarui quantity
        $cart->save(); // Simpan perubahan
    
        return redirect()->back()->with('success', 'Quantity updated successfully!');
    }
     
    
}

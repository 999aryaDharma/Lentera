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
        return view('keranjang', compact('carts'));
    }

    public function store(Request $request)
    {
        // Periksa apakah produk sudah ada di cart user yang sedang login
        $duplicate = Cart::where('product_id', $request->product_id)
                         ->where('user_id', Auth::id()) // Hanya cek untuk user yang login
                         ->first();
    
        if ($duplicate) {
            return redirect()->route('cart.index')->with('failed', 'This product is already in your cart');
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
        // Update quantity berdasarkan ID cart
        $cart = Cart::where('id', $id)->first();
        
        if ($cart) {
            $cart->qty = $request->quantity;
            $cart->save(); // Simpan perubahan quantity
    
            return redirect()->route('cart.index');
        }
    
        return response()->json(['success' => false, 'message' => 'Item not found']);
    }
    
}

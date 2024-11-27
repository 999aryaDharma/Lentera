<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\orderDetail;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function dashboard()
    {
        // Ambil data order
        $data = Order::get();
    
        // Kirimkan data ke view
        return view('admin.dashboard', compact('data'));
    }
    
    public function indexUser()
    {
        $orders = Order::with(['detail.product', 'user'])
            ->where('user_id', Auth::user()->id)
            ->get();
        $total = $orders->sum('total_price');
    
        return view('viewOrder', compact('orders', 'total'));
    }
    
    

    public function index()
    {
        $orders = Order::all();

        return view('admin.orderList', compact('orders'));
    }

    // Create Method
    public function create()
    {
        // Ambil semua data user untuk select option
        $users = User::all();

        return view('admin.order_create', compact('users'));
    }

    // Store Method
    public function store(Request $request)
    {
        $carts = Cart::where('user_id', Auth::user()->id);
        $cartUser = $carts->get();
    
        // Hitung total harga
        $total = $cartUser->reduce(function ($carry, $cart) {
            return $carry + ($cart->qty * $cart->product->harga);
        }, 0);
    
        // Buat pesanan
        $orders = Order::create([
            'user_id' => Auth::user()->id,
            'total_price' => $total,
            'shipping_address' => Auth::user()->alamat,
            'payment_method' => $request->payment_method,
            'payment_status' => 'pending',
        ]);
    
        // Buat detail pesanan
        foreach ($cartUser as $cart) {
            $orders->detail()->create([
                'product_id' => $cart->product_id,
                'qty' => $cart->qty, // Pastikan qty dari cart dicatat
                'subtotal' => $cart->qty * $cart->product->harga,
            ]);
        }
    
        Cart::where('user_id', Auth::id())->delete();
    
        return redirect()->route('order.user')->with('success', 'Pesanan berhasil dibuat.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Ambil order berdasarkan order_id yang diberikan
        $order = Order::with(['detail.product', 'user'])
            ->where('id', $id)  // Filter berdasarkan order_id
            ->first(); // Ambil satu order berdasarkan ID
    
        // Cek apakah order ditemukan
        if (!$order) {
            // Jika tidak ditemukan, redirect atau beri pesan error
            return redirect()->route('admin.order.index')->with('error', 'Order not found');
        }
    
        return view('admin.order_detail', compact('order'));
    }
    
    

    // Edit Method
    public function edit(Request $request, $id)
    {
        $orders = Order::with('user')->find($id);

        return view('admin.order_edit', compact('orders'));
    }

    // Update Method
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'payment_status' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $orders['payment_status'] = $request->payment_status;

        Order::whereId($id)->update($orders);

        return redirect()->route('adminpage.order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        // Hapus detail pesanan terlebih dahulu
        $order->detail()->delete();
    
        // Hapus pesanan
        $order->delete();

        return redirect()->route('adminpage.order.index');
    }
    
    public function destroyOrderUser(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        // Hapus detail pesanan terlebih dahulu
        $order->detail()->delete();
    
        // Hapus pesanan
        $order->delete();

        return redirect()->route('order.user');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
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
    
    public function index()
    {
        $orders = Order::get();

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
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'total_price' => 'required|numeric',
            'discount' => 'nullable|numeric|min:0|max:100', // Discount dalam persen
            'shipping_address' => 'required|string',
            'payment_status' => 'required|in:pending,failed,paid',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Konversi persen menjadi nilai diskon yang benar
        $discountAmount = round($request->total_price * ($request->discount / 100));
        $finalPrice = round($request->total_price - $discountAmount);

        Order::create([
            'user_id' => $request->user_id,
            'total_price' => $request->total_price,
            'discount' => $request->discount, // Menyimpan nilai persen
            'final_price' => round($finalPrice), // Membulatkan ke dua desimal
            'shipping_address' => $request->shipping_address,
            'payment_status' => $request->payment_status,
        ]);

        return redirect()->route('adminpage.order.index')->with('success', 'Order created successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $orders = Order::with('user')->find($id);

        if ($orders) {
            $orders->delete();
        }

        return redirect()->route('adminpage.order.index');
    }
}

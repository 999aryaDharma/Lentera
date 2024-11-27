<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Controller UserController
    public function dashboard()
    {
        $datauser = User::all(); // Ambil semua data user
        $dataorders = Order::all(); // Ambil semua data order
        $datacategory = category::all(); // Mengambil semua data category
        $dataproduct = product::all(); 

        // Kirimkan jumlahnya ke view
        return view('admin.dashboard', [
            'userCount' => $datauser->count(),
            'orderCount' => $dataorders->count(),
            'categoryCount' => $datacategory->count(),
            'productCount' => $dataproduct->count()
        ], compact('dataorders'));
    }


    // Index Method
    public function index()
    {
        $datauser = User::get();

        return view('user.user', compact('datauser'));
    }

    // Create Method
    public function create()
    {
        return view('user.create');
    }

    // Store Method
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'role' => 'required|in:admin,guest', // Validasi role
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $datauser = [
            'role' => $request->role, // Menyimpan nilai role
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ];

        User::create($datauser);

        return response()->json(['status' => 'success']);
    }



    // Edit Method
    public function edit(Request $request, $id)
    {
        $datauser = User::find($id);

        return view('user.edit', compact('datauser'));
    }

    // Update Method
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'nullable',
            'alamat' => 'required',
            'telepon' => 'required',
            'role' => 'nullable',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $datauser['email'] = $request->email;
        $datauser['name'] = $request->nama;
        $datauser['alamat'] = $request->alamat;
        $datauser['telepon'] = $request->telepon;
        $datauser['role'] = $request->role;

        if ($request->password) {
            $datauser['password'] = Hash::make($request->password);
        }

        User::whereId($id)->update($datauser);

        return redirect()->route('adminpage.user.index');
    }

    // Destroy Method
    public function destroy(Request $request, $id)
    {
        $datauser = User::find($id);

        if ($datauser) {
            $datauser->delete();
        }

        return redirect()->route('adminpage.user.index');
    }

    // Update Info User Method
    public function updateUserInfo(Request $request)
    {
        $user = Auth::user();
    
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
        ]);
        
        // Update data menggunakan query builder
        User::where('id', $user->id)->update([
            'name' => $validated['name'],
            'telepon' => $validated['telepon'],
            'alamat' => $validated['alamat'],
        ]);
    
        return redirect()->back()->with('success', 'Information updated successfully!');
    }
    
}

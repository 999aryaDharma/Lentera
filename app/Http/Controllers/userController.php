<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Index Method
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Index Method
    public function index()
    {
        $data = User::get();

        return view('user.user', compact('data'));
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

        $data = [
            'role' => $request->role, // Menyimpan nilai role
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ];

        User::create($data);

        return response()->json(['status' => 'success']);
    }



    // Edit Method
    public function edit(Request $request, $id)
    {
        $data = User::find($id);

        return view('user.edit', compact('data'));
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

        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['telepon'] = $request->telepon;
        $data['role'] = $request->role;

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        User::whereId($id)->update($data);

        return redirect()->route('adminpage.user.index');
    }

    // Destroy Method
    public function destroy(Request $request, $id)
    {
        $data = User::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('adminpage.user.index');
    }

    // Show Method
    public function show(string $id)
    {
        //
    }
}

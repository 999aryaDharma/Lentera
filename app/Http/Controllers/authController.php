<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('adminpage.dashboard');
            } else {
                return redirect()->route('index');
            }
        }

        return redirect()->route('login')->with('failed', 'Email atau Password Salah!');
    }

    public function logoutproses(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerproses(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'email'  => 'required|email|unique:users,email',
            'password' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $data['role'] = 'guest';
        $data['name'] = $request->nama;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['alamat'] = $request->alamat;
        $data['telepon'] = $request->telepon;

        User::create($data);

        return redirect()->route('login')->with('success', 'Kamu berhasil membuat akun, silakan Login!');
    }
}

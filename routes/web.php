<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/navbar', function () {
    return view('include/navbar');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});
Route::get('/detail', function () {
    return view('detail');
});

Route::get('/bayar', function () {
    return view('bayar');
});

Route::get('/login', function () {
    return view('auth/loginpage');
});

Route::get('/register', function () {
    return view('auth/registerpage');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});

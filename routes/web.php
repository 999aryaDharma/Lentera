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
Route::get('/pembayaran', function () {
    return view('pembayaran');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content/index');
})->name('lentera');

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/keranjang', function () {
    return view('content/keranjang');
})->name('keranjang');

Route::get('/detail', function () {
    return view('content/detail');
})->name('detail');

Route::get('/login', function () {
    return view('auth/loginpage');
})->name('login');

Route::get('/register', function () {
    return view('auth/registerpage');
})->name('register');

Route::get('/beli', function () {
    return view('content/beli');
})->name('beli');

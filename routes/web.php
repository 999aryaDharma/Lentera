<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('content/index');
// })->name('lentera');

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/carousel', function () {
    return view('content/carousel');
});

// Route::get('/keranjang', function () {
//     return view('content/keranjang');
// })->name('keranjang');

// Route::get('/detail', function () {
//     return view('content/detail');
// })->name('detail');

Route::get('/login', function () {
    return view('auth/loginpage');
})->name('login');

// Route::get('/register', function () {
//     return view('auth/registerpage');
// })->name('register');

// Route::get('/beli', function () {
//     return view('content/beli');
// })->name('beli');


// route controller
route::get('/', 'App\Http\Controllers\productController@index')->name('lentera');
route::get('/detail', 'App\Http\Controllers\productController@show')->name('detail');

route::get('/keranjang', 'App\Http\Controllers\keranjangController@index')->name('keranjang');

route::get('/register', 'App\Http\Controllers\authController@create')->name('register');

route::get('/beli', 'App\Http\Controllers\pembelianController@index')->name('beli');

route::get('/alamat', 'App\Http\Controllers\alamatController@index')->name('alamat');
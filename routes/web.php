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



// Admin
route::get('/sidebar', function () {
    return view('admin.sidebar');
});
route::get('/admin', function(){
    return view('admin.dashboard');
})->name('admin');
// route::get('/product', function () {
//     return view('admin.product');

// route::get('/category', function(){
//     return view('admin.category');
// })->name('category');
// });

// route::get('/user', function(){
//     return view('admin.user');
// });

route::get('/order', function(){
    return view('admin.orderList');
})->name('order');


route::get('/product', 'App\Http\Controllers\productAdminController@index')->name('productAdmin');
route::get('/category', 'App\Http\Controllers\categoryController@index')->name('category');
route::get('/user', 'App\Http\Controllers\userController@index')->name('user');

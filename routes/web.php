<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\productAdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


// Login Controller
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/loginproses', [AuthController::class, 'loginproses'])->name('login.proses');
Route::get('/logoutproses', [AuthController::class, 'logoutproses'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerproses', [AuthController::class, 'registerproses'])->name('register.proses');
Route::get('/', function() {
    return view('index');
})->name('index');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', AdminMiddleware::class], 'as' => 'adminpage.'], function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
<<<<<<< HEAD
    
    // User Contoller
=======

        
>>>>>>> a515618e4c5bef94f86218c4d9447020aab2abfd
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    // Order Contoller
    Route::get('/orderlist', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::put('/order/update/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/order/delete/{id}', [OrderController::class, 'destroy'])->name('order.delete');
    Route::get('/order/detail/{id}', [OrderController::class, 'showDetail'])->name('order.detail');

    // Product Contoller
    Route::get('/product', [productAdminController::class, 'index'])->name('product.index');
<<<<<<< HEAD
    
    // User Contoller
    Route::get('/category', [categoryController::class, 'index'])->name('category.index');
=======


    // Kategori
    route::resource('/category', 'App\Http\Controllers\categoryController');

>>>>>>> a515618e4c5bef94f86218c4d9447020aab2abfd
});



// Route::get('/carousel', function () {
//     return view('content/carousel');
// });

// Route::get('/keranjang', function () {
//     return view('content/keranjang');
// })->name('keranjang');

// Route::get('/detail', function () {
//     return view('content/detail');
// })->name('detail');

// Route::get('/login', function () {
//     return view('auth/loginpage');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth/registerpage');
// })->name('register');

// Route::get('/beli', function () {
//     return view('content/beli');
// })->name('beli');


// route controller
// route::get('/', 'App\Http\Controllers\productController@index')->name('lentera');
// route::get('/detail', 'App\Http\Controllers\productController@show')->name('detail');

// route::get('/keranjang', 'App\Http\Controllers\keranjangController@index')->name('keranjang');

// route::get('/register', 'App\Http\Controllers\authController@create')->name('register');

// route::get('/beli', 'App\Http\Controllers\pembelianController@index')->name('beli');

// route::get('/alamat', 'App\Http\Controllers\alamatController@index')->name('alamat');



// Admin
// route::get('/sidebar', function () {
//     return view('admin.sidebar');
// });
// route::get('/admin', function(){
//     return view('admin.dashboard');
// })->name('admin');
// route::get('/product', function () {
//     return view('admin.product');

// route::get('/category', function(){
//     return view('admin.category');
// })->name('category');
// });

// route::get('/user', function(){
//     return view('admin.user');
// });

// route::get('/order', function(){
//     return view('admin.orderList');
// })->name('order');


// route::get('/product', 'App\Http\Controllers\productAdminController@index')->name('productAdmin');

// route::get('/category', 'App\Http\Controllers\categoryController@index')->name('category');


// route::get('/user', 'App\Http\Controllers\userController@index')->name('user');

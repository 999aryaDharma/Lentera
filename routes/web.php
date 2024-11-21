<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


// Auth Controller
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/loginproses', [AuthController::class, 'loginproses'])->name('login.proses');
Route::get('/logoutproses', [AuthController::class, 'logoutproses'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerproses', [AuthController::class, 'registerproses'])->name('register.proses');

// Halaman Web
Route::get('/', [WebController::class, 'show'])->name('index');
Route::get('/detail/{id}', [WebController::class, 'detailProduct'])->name('detailProduct');
Route::get('/showcat/{id}', [WebController::class, 'showCategory'])->name('showCategory');

Route::get('/cart', [CartController::class, 'index'])->middleware('auth')->name('cart.index');
Route::post('/cart/add', [CartController::class, 'store'])->middleware('auth')->name('cart.store');
Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

Route::get('/beli', function() {return view('beli');})->name('beli');




// Admin Route
Route::group(['prefix' => 'admin', 'middleware' => ['auth', AdminMiddleware::class], 'as' => 'adminpage.'], function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/carousel', [WebController::class, 'carousel'])->name('carousel.index');
    Route::get('/carousel/create', [WebController::class, 'carouselCreate'])->name('carousel.create');
    Route::post('/carousel/store', [WebController::class, 'carouselStore'])->name('carousel.store');
    Route::get('/carousel/edit/{id}', [WebController::class, 'carouselEdit'])->name('carousel.edit');
    Route::put('/carousel/{id}', [WebController::class, 'carouselUpdate'])->name('carousel.update');
    Route::delete('/carousel/destroy/{id}', [WebController::class, 'carouselDestroy'])->name('carousel.destroy');
    
    // User Contoller
    route::resource('/user', 'App\Http\Controllers\userController');
    // Order Contoller
    route::resource('/order', 'App\Http\Controllers\OrderController');
    // product
    route::resource('/product', 'App\Http\Controllers\productController');
    // Kategori
    route::resource('/category', 'App\Http\Controllers\categoryController');

});



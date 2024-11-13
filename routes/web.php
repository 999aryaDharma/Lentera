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
    
    // User Contoller
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
    
    // User Contoller
    Route::get('/category', [categoryController::class, 'index'])->name('category.index');
});


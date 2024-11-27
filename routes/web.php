<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\product;
use Illuminate\Support\Facades\Route;


// Auth Controller
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/loginproses', [AuthController::class, 'loginproses'])->name('login.proses');
Route::get('/logoutproses', [AuthController::class, 'logoutproses'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerproses', [AuthController::class, 'registerproses'])->name('register.proses');

// Halaman Web
Route::get('/', [productController::class, 'show'])->name('index');
Route::get('/detail/{id}', [productController::class, 'detailProduct'])->name('detailProduct');
Route::get('/showcat/{id}', [categoryController::class, 'showCategory'])->name('showCategory');

// Cart Method Route
Route::resource('/cart', 'App\Http\Controllers\CartController');

// Check Out Method
Route::put('/update-userinfo', [userController::class, 'updateUserInfo'])->name('updateUserInfo');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/checkout-single/{id}', [CheckoutController::class, 'indexSingle'])->name('checkout.single');
Route::post('/order/create', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/succes', [OrderController::class, 'indexUser'])->name('order.user');
Route::delete('/orderuser/destroy/{id}', [OrderController::class, 'destroyOrderUser'])->name('orderuser.destroy');
Route::post('/validate-stock', [OrderController::class, 'validateStock'])->name('validate.stock');



// Admin Route
Route::group(['prefix' => 'admin', 'middleware' => ['auth', AdminMiddleware::class], 'as' => 'adminpage.'], function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    // User Contoller
    route::resource('/user', 'App\Http\Controllers\userController');
    // Order Contoller
    route::resource('/order', 'App\Http\Controllers\OrderController');
    // product
    route::resource('/product', 'App\Http\Controllers\productController');
    // Kategori
    route::resource('/category', 'App\Http\Controllers\categoryController');
    // Carousel Controller
    route::resource('/carousel', 'App\Http\Controllers\CarouselController');
    
});



<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\productAdminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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


// halaman customer
route::get('/', [productController::class, 'web'])->name('index');

// route::get('/detail', [productController::class, 'web'])->name('index');

route::get('/detail/{product}', [productController::class, 'show'])->name('detail');

// Keranjang
// Route::resource('/keranjang', 'App\Http\Controllers\keranjangController');

// route::resource('/detail', 'App\Http\Controllers\productController');

// route::resource('/detail', 'App\Http\Controllers\productController');



// Halaman Web

// Route::get('/showcat/{id}', [WebController::class, 'showCategory'])->name('showCategory');

// Route::get('/cart', [CartController::class, 'index'])->middleware('auth')->name('cart.index');
// Route::post('/cart/add', [CartController::class, 'store'])->middleware('auth')->name('cart.store');
// Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
// Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

Route::get('/beli', function() {return view('beli');})->name('beli');

Route::get('/', [productController::class, 'web'])->name('index');
Route::get('/detail/{product}', [productController::class, 'show'])->name('detailProduct');
Route::get('/showcat/{id}', [categoryController::class, 'showCategory'])->name('showCategory');


// Cart Method Route
Route::resource('/cart', 'App\Http\Controllers\CartController');

// Check Out Method
Route::put('/update-userinfo', [userController::class, 'updateUserInfo'])->name('updateUserInfo');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/order/create', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/succes', [OrderController::class, 'indexUser'])->name('order.user');
Route::delete('/orderuser/destroy/{id}', [OrderController::class, 'destroyOrderUser'])->name('orderuser.destroy');


// Admin Route
Route::group(['prefix' => 'admin', 'middleware' => ['auth', AdminMiddleware::class], 'as' => 'adminpage.'], function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    // User Contoller
    route::resource('/user', 'App\Http\Controllers\userController');
    // Order Contoller
    route::resource('/order', 'App\Http\Controllers\OrderController');
    // product
    Route::resource('/product', 'App\Http\Controllers\productController');

    // Kategori

    Route::resource('/category', 'App\Http\Controllers\categoryController');

    // Carousel Controller
    route::resource('/carousel', 'App\Http\Controllers\CarouselController');
    
});



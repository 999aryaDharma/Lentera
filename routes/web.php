<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/navbar', function () {
    return view('include/navbar');
});
Route::get('/detail', function () {
    return view('detail');
});

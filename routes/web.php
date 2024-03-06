<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/productDetails', function () {
    return view('prduct-details');
});

Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('profile', function () {
    return view('profile-account');
});

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::get('recovery', function () {
    return view('password-recovery');
});

Route::get('orders', function () {
    return view('orders');
});

Route::get('address', function () {
    return view('address');
});


// Admin routes

Route::get('super', function () {
    return view('admin.index');
});
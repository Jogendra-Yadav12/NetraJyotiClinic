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

Route::get('category',[App\Http\Controllers\adminController::class,'category']);
Route::get('addCategory',[App\Http\Controllers\adminController::class,'index']);
Route::post('addCategory',[App\Http\Controllers\adminController::class,'addcategory']);

Route::get('product', function () {
    return view('admin.product');
});

Route::get('addProduct', function () {
    return view('admin.addProduct');
});

Route::get('productDetails', function () {
    return view('admin.productDetails');
});

Route::get('order', function () {
    return view('admin.orders');
});

Route::get('orderDetails', function () {
    return view('admin.orderDetails');
});

Route::get('customer', function () {
    return view('admin.customers');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/categories', function () {
    return view('frontend.categories');
})->name('categories');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/login', function () {
    return view('frontend.auth.login');
})->name('login');

// Registration routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('checkout');




Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');

Route::get('/add-customer', function () {
    return view('backend.add-customer');
})->name('add-customer');

Route::get('/add-order', function () {
    return view('backend.add-order');
})->name('add-order');

Route::get('/add-product', function () {
    return view('backend.add-product');
})->name('add-product');

Route::get('/customers', function () {
    return view('backend.customers');
})->name('customers');

Route::get('/orders', function () {
    return view('backend.orders');
})->name('orders');

Route::get('/products', function () {
    return view('backend.products');
})->name('products');

Route::get('/users', function () {
    return view('backend.users');
})->name('users');

Route::get('/add-user', function () {
    return view('backend.add-user');
})->name('add-user');

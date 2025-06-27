<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');

Route::get('/product', function () {
    return view('frontend.product');
})->name('product');
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

Route::get('/register', function () {
    return view('frontend.auth.register');
})->name('register');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('checkout');




Route::get('/dashboard', function () {
    return view('backend.welcome');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});
Route::get('/dashboard', function () {
    return view('backend.welcome');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('other/about');
});
Route::get('/class', function () {
    return view('other/class');
});
Route::get('/blog', function () {
    return view('other/blog');
});

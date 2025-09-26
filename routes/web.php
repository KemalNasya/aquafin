<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/infrastructure', function () {
    return view('infrastructure');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('/contact', function () {
    return view('contact');
});
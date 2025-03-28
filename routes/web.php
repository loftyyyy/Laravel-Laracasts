<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["name" => "Rho"]);
})->name('home');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Route::get('/about', function (){
    return view('about');
})->name('about');








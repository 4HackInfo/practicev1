<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Registered;

Route::get('/contact', [ContactController::class, 'show'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/register',[RegisterController::class, 'show'])->name('register.form');
Route::post('/register',[RegisterController::class, 'submit'])->name('register.submit');

Route::get('/about', function(){
    return view('about');
});

Route::get('/programming', function(){
    return view('programming');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/framework', function(){
    return view('framework');
});

Route::get('/games', function(){
    return view('games');
});




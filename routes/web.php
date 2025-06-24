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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', function() {
    return redirect()->route('dashboard');
})->name('login.post');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('register', function() {
    return redirect()->route('login');
})->name('register.post');


Route::get('dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ["name" => "Arsalan Ahmed Siddique"]);
});

Route::get('/welcome', function () {
    echo "Welcome back to Laravel 8.0";
});

// Route::view('/home', 'home');

Route::get('/home/view', function () {
    echo "Home route's name changed to abcd.";
})->name('abcd');

Route::get('/user/{id}', [testController::class, "myName"]);

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

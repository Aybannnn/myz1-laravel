<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', function () {
//     return view('login');
// });

// // Define the user-homepage route with UserController
// Route::get('/user-homepage', [UserController::class, 'userHomepage'])->name('user-homepage');

// Route::get('/login', 'UserController@showLoginForm')->name('login');
// Route::post('/login', 'UserController@login')->name('login.submit');
// Route::get('/user-homepage', 'UserController@userHomepage')->name('user.userHomepage');


Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/user-homepage', [UserController::class, 'showUserpage'])->name('user.userHomepage');





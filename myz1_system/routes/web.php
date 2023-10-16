<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User;
use App\Http\Controlllers\Admin;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/user-homepage', [UserController::class, 'showUserpage'])->name('user.userHomepage');
Route::get('/admin-homepage', [UserController::class, 'showAdminpage'])->name('admin.adminHomepage');





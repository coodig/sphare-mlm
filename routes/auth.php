<?php

use App\Http\Controllers\Authentication\ForgetPasswordController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Authentication\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {

    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register/store', [RegisterController::class, 'register'])->name('register.store');

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login/store', [LoginController::class, 'login'])->name('login.store');


    Route::get('/forget-password', [ForgetPasswordController::class, 'show'])->name('forget-password');

    Route::get('/reset-password', [ResetPasswordController::class, 'show'])->name('reset-password');

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    // Route::get('/google/login')

});

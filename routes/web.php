<?php

use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\SettingController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('/u/{username}')->group(function(){

    Route::get('/dashboard',[DashboardController::class,'show'])->name('dashboard');

    Route::get('/profile',[ProfileController::class,'show'])->name('profile');

    Route::get('/setting',[SettingController::class,'show'])->name('setting');
});

<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\DisclaimerController;
use App\Http\Controllers\Pages\FAQsController;
use App\Http\Controllers\Pages\PrivacyController;
use App\Http\Controllers\Pages\TermsAndConditionController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\EWalletController;
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
    Route::post('/profile/update',[ProfileController::class,'update'])->name('profile.update');

    Route::get('/setting',[SettingController::class,'show'])->name('setting');

    Route::get('/e-wallet',[EWalletController::class,'show'])->name('e-wallet');
});


Route::prefix('/pages')->group(function(){
    Route::get('/about-us',[AboutController::class,'show'])->name('about-us');
    Route::get('/contact-us',[ContactController::class,'show'])->name('contact-us');
    Route::get('/faqs',[FAQsController::class,'show'])->name('faqs');
    Route::get('/privacy-policy',[PrivacyController::class,'show'])->name('privacy-policy');
    Route::get('/terms-and-condition',[TermsAndConditionController::class,'show'])->name('terms-and-condition');
    Route::get('/disclaimer',[DisclaimerController::class,'show'])->name('disclaimer');
});

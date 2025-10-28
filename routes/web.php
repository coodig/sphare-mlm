<?php

use App\Http\Controllers\Admin\AllUsersController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\DisclaimerController;
use App\Http\Controllers\Pages\FAQsController;
use App\Http\Controllers\Pages\PrivacyController;
use App\Http\Controllers\Pages\TermsAndConditionController;
use App\Http\Controllers\Pages\TestimonialsController;
use App\Http\Controllers\Web\CommissionController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\EWalletController;
use App\Http\Controllers\Web\GenealogyTreeController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\RankingController;
use App\Http\Controllers\Web\ReferralController;
use App\Http\Controllers\Web\SettingController;
use App\Http\Controllers\Web\WithdrawsController;
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

    Route::get('/products',[ProductController::class,'show'])->name('products');

    Route::get('/genealogy-tree',[GenealogyTreeController::class,'show'])->name('genealogy-tree');

    Route::get('/rankings',[RankingController::class,'show'])->name('rankings');

    Route::get('/referrals',[ReferralController::class,'show'])->name('referrals');

    Route::get('/commissions',[CommissionController::class,'show'])->name('commissions');

    Route::get('/withdraws',[WithdrawsController::class,'show'])->name('withdraws');



});


Route::prefix('/pages')->group(function(){
    Route::get('/testimonials',[TestimonialsController::class,'show'])->name('testimonials');
    Route::get('/about-us',[AboutController::class,'show'])->name('about-us');
    Route::get('/contact-us',[ContactController::class,'show'])->name('contact-us');
    Route::get('/faqs',[FAQsController::class,'show'])->name('faqs');
    Route::get('/privacy-policy',[PrivacyController::class,'show'])->name('privacy-policy');
    Route::get('/terms-and-condition',[TermsAndConditionController::class,'show'])->name('terms-and-condition');
    Route::get('/disclaimer',[DisclaimerController::class,'show'])->name('disclaimer');
});


Route::prefix('admin')->group(function(){
    Route::get('/all-users',[AllUsersController::class,'allUsers'])->name('all-users');
});

<?php

use App\Http\Controllers\Clients\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\AuthController;
use App\Http\Controllers\Clients\CartController;
use App\Http\Controllers\Clients\ForgotPasswordController;
use App\Http\Controllers\Clients\ResetPasswordController;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\ProductController;
use App\Http\Controllers\Clients\SearchController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('clients.pages.about');
})->name('about');

Route::get('/service', function () {
    return view('clients.pages.service');
})->name('service');

Route::get('/team', function () {
    return view('clients.pages.team');
})->name('team');   

Route::get('/faq', function () {
    return view('clients.pages.faq');
})->name('faq');


Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('post-register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('post-login');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');
    
});
Route::get('/activate/{token}', [AuthController::class, 'activate'])->name('activate');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth.custom'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('account')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('account');
        Route::put('/update', [AccountController::class, 'update'])->name('account.update');
        
        Route::post('/change-password', [AccountController::class, 'changePassword'])->name('account.change-password');

        Route::post('/addresses', [AccountController::class, 'addAddress'])->name('account.addresses.add');
        Route::put('/addresses/{id}', [AccountController::class, 'updatePrimaryAddress'])->name('account.addresses.update');
        Route::delete('/addresses/{id}', [AccountController::class, 'deleteAddress'])->name('account.addresses.delete');

   });
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/filter', [ProductController::class, 'filter'])->name('products.filter');

Route::get('/products/{slug}', [ProductController::class, 'detail'])->name('products.detail');

//Handle cart

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromMiniCart'])->name('cart.remove');
Route::get('/mini-cart', [CartController::class, 'loadMiniCart'])->name('cart.mini');

Route::get('/carts', [CartController::class, 'viewCart'])->name('cart.index');





//search
Route::get('/search', [SearchController::class, 'index'])->name('search');

require __DIR__.'/admin.php';
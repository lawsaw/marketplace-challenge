<?php

use App\Livewire\Products\Create as ProductCreate;
use App\Livewire\Dashboard\Home as DashboardHome;
use App\Livewire\Auth\SignIn as AuthSignIn;
use App\Livewire\Auth\SignUp as AuthSignUp;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::group(['prefix' => 'products'], function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('products');
        Route::get('{product}', 'show')->name('product');
    });
});

Route::get('/sign-in', AuthSignIn::class)->name('login');
Route::get('/sign-up', AuthSignUp::class)->name('register');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', DashboardHome::class)->name('dashboard')->middleware('auth');
});

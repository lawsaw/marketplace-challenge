<?php

use App\Livewire\Products\Create as ProductCreate;
use App\Livewire\Dashboard\Home as DashboardHome;
use App\Livewire\Dashboard\SignIn as DashboardSignIn;
use App\Livewire\Dashboard\SignUp as DashboardSignUp;
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


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', DashboardHome::class)->name('dashboard');
    Route::get('/sign-in', DashboardSignIn::class)->name('sign-in');
    Route::get('/sign-up', DashboardSignUp::class)->name('sign-up');
});

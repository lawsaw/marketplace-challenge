<?php

use App\Livewire\Dashboard\Home as DashboardHome;
use App\Livewire\Dashboard\Products as DashboardProducts;
use App\Livewire\Dashboard\ProductCreate as DashboardProductCreate;
use App\Livewire\Auth\SignIn as AuthSignIn;
use App\Livewire\Auth\SignUp as AuthSignUp;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', DashboardHome::class)->name('dashboard')->middleware('auth');
    Route::get('/products', DashboardProducts::class)->name('dashboard-products')->middleware('auth');
    Route::get('/product-create', DashboardProductCreate::class)->name('dashboard-product-create')->middleware('auth');
});

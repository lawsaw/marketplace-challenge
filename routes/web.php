<?php

use App\Livewire\Dashboard\Home as DashboardHome;
use App\Livewire\Dashboard\ProductList as DashboardProductList;
use App\Livewire\Dashboard\CreateProduct as DashboardCreateProduct;
use App\Livewire\Dashboard\EditProduct as DashboardEditProduct;
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
    Route::get('/products', DashboardProductList::class)->name('dashboard-product-list')->middleware('auth');
    Route::get('/product/create', DashboardCreateProduct::class)->name('dashboard-create-product')->middleware('auth');
    Route::get('/product/{product}/edit', DashboardEditProduct::class)->name('dashboard-edit-product')->middleware('auth');
});

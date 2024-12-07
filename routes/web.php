<?php

use App\Livewire\Products\Create as ProductCreate;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::group(['prefix' => 'products'], function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('create', ProductCreate::class);
        Route::get('{product}', 'show');
    });
});

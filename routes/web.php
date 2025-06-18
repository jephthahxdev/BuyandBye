<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;


Route::middleware(['web'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']);
    Route::post('/cart/add', [WelcomeController::class, 'addToCart']);
    Route::get('/cart/count', [WelcomeController::class, 'cartCount']);
    Route::get('/cart', [CartController::class, 'show']);
    Route::get('/checkout', [CheckoutController::class, 'show']);
    Route::get('/payment', [CheckoutController::class, 'payment']);

    // Product routes
    Route::get('/product/{id}', [ProductController::class, 'show']);
});

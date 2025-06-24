<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AllOrdersController;
use App\Http\Controllers\Admin\OrderSingleController;
use App\Http\Controllers\Admin\AllUsersController;

// All routes in this file will be prefixed with /admin and use 'web' middleware if you set it in app.php

// Public admin routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected admin routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'show'])->name('admin.dashboard');
    Route::get('/orders', [AllOrdersController::class, 'index'])->name('orders.index');
    Route::get('/orders/{orderId}', [OrderSingleController::class, 'show'])->name('orders.show');
    Route::post('/orders/{orderId}/status', [OrderSingleController::class, 'updateOrderStatus'])->name('orders.update-status');
    Route::post('/orders/{orderId}/cancel', [OrderSingleController::class, 'cancelOrder'])->name('orders.cancel');
    Route::post('/orders/{order}/status', [AdminDashboardController::class, 'updateOrderStatus'])->name('orders.status');
    
    // Users routes
    Route::get('/users', [AllUsersController::class, 'index'])->name('users.index');
    Route::get('/users/{userId}', [AllUsersController::class, 'show'])->name('users.show');
    
    // Add more admin routes here as needed
});
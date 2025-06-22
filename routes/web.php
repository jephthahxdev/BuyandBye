<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;


/* BOL Checking Database connection */
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "Connected successfully to database " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "Could not connect to the database. Please check your configuration. Error: " . $e->getMessage();
    }
});

Route::get('/list-tables', function () {
    try {
        $tables = DB::select('SHOW TABLES');
        $dbName = DB::connection()->getDatabaseName();
        $tableList = array_map('current', $tables);
        return view('tables', compact('dbName', 'tableList'));
    } catch (\Exception $e) {
        return "Could not retrieve the tables. Please check your configuration. Error: " . $e->getMessage();
    }
});

Route::get('/table/{table}', function ($table) {
    try {
        $data = DB::table($table)->get();
        $columns = Schema::getColumnListing($table);
        return view('table-data', compact('table', 'data', 'columns'));
    } catch (\Exception $e) {
        return "Could not retrieve data from the table. Please check your configuration. Error: " . $e->getMessage();
    }
});

/* EOL Checking Database Connection */

Auth::routes();

Route::middleware(['web'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']);
    Route::post('/cart/add', [WelcomeController::class, 'addToCart']);
    Route::get('/cart/count', [WelcomeController::class, 'cartCount']);

    // Cart routes
    Route::get('/cart', [CartController::class, 'show']);
    Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity']);
    Route::post('/cart/remove-item', [CartController::class, 'removeItem']);
    Route::post('/cart/clear', [CartController::class, 'clearCart']);
    Route::get('/cart/info', [CartController::class, 'getCartInfo']);

    // Checkout routes
    Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
    Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
    Route::get('/payment', [CheckoutController::class, 'payment'])->name('payment.show');
    Route::post('/payment', [PaymentController::class, 'redirectToGateway'])->name('payment.process');
    Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('payment.callback');
    Route::get('/payment/success/{order:id}', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('/order/{order:id}/pdf', [PaymentController::class, 'downloadOrderPdf'])->name('order.pdf');

    // Product routes
    Route::get('/product/{slug}', [ProductController::class, 'show']);
    
    // Review routes
    Route::post('/product/review', [ProductController::class, 'submitReview'])->middleware('auth');
    Route::post('/review/like', [ProductController::class, 'likeReview'])->middleware('auth');
    Route::post('/review/reply', [ProductController::class, 'replyReview'])->middleware('auth');

    // Auth routes
    Route::get('/register', [RegisterController::class, 'show']);
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login']);

    // Dashboard routes
    Route::get('/account', [DashboardController::class, 'show']);

    // Billing routes
    Route::get('/account/billing', [BillingController::class, 'show'])->name('billing.show');
    Route::post('/account/billing/add', [BillingController::class, 'addBillingAddress']);

    // Profile routes
    Route::get('/account/profile', [ProfileController::class, 'show']);
});
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
    Route::get('/cart', [CartController::class, 'show']);
    Route::get('/checkout', [CheckoutController::class, 'show']);
    Route::get('/payment', [CheckoutController::class, 'payment']);

    // Product routes
    Route::get('/product/{id}', [ProductController::class, 'show']);

    // Auth routes
    Route::get('/register', [RegisterController::class, 'show']);
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login']);
});

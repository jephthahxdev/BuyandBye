<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmartyController;

Route::get('/', [SmartyController::class, 'index']);
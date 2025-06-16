<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmartyController;

Route::get('/smarty', [SmartyController::class, 'index']);
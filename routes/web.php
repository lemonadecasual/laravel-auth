<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/index');
});

Route::prefix('auth')->group(function () {
    Route::get('/index', [AuthController::class, 'index'])->name('auth-index');
    Route::get('/register', [AuthController::class, 'register'])->name('auth-register');
    Route::get('/store', [AuthController::class, 'store'])->name('auth-store');
});
Route::prefix('dashboard')->group(function () {
    Route::get('/index', [DashboardController::class, 'index'])->name('auth-index');

});

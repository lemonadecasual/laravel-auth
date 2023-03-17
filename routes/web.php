<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/index');
});

Route::prefix('auth')->group(function () {
    Route::get('/index', [AuthController::class, 'index'])->name('auth-index');
    Route::get('/register', [AuthController::class, 'register'])->name('auth-register');
    Route::get('/store', [AuthController::class, 'store'])->name('auth-store');
    Route::get('/wallet_exists', [AuthController::class, 'wallet_exists'])->name('auth-wallet_exists');
    Route::get('/get_user', [AuthController::class, 'get_user'])->name('auth-get_user');

});
Route::prefix('dashboard')->group(function () {
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard-index');
});

Route::prefix('profile')->group(function () {
    Route::get('/index', [ProfileController::class, 'index'])->name('profile-index');
});

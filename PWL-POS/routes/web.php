<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Public Routes — Bebas diakses tanpa login
|--------------------------------------------------------------------------
*/

// Landing Page (halaman awal)
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Halaman Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Halaman Products — route prefix /category/{sub}
Route::get('/category/food-beverage', [ProductController::class, 'index'])
    ->defaults('sub', 'food-beverage')
    ->name('category.food-beverage');

Route::get('/category/beauty-health', [ProductController::class, 'index'])
    ->defaults('sub', 'beauty-health')
    ->name('category.beauty-health');

Route::get('/category/home-care', [ProductController::class, 'index'])
    ->defaults('sub', 'home-care')
    ->name('category.home-care');

Route::get('/category/baby-kid', [ProductController::class, 'index'])
    ->defaults('sub', 'baby-kid')
    ->name('category.baby-kid');

// Halaman User — route param /user/{id}/name/{name}
Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.show');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Protected Routes — Wajib login
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Dashboard (setelah login)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Halaman Penjualan — wajib login
    Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan');

});

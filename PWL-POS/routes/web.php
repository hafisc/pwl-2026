<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/{category}', [ProductController::class, 'index'])->name('products.category');
});

Route::get('/user/{id}/{name}', [UserController::class, 'profile'])->name('user.profile');

Route::get('/sales', [SalesController::class, 'index'])->name('sales');

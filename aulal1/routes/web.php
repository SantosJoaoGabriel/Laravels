<?php

use App\Http\Controllers\ExemploController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo', [ExemploController::class, 'index']);
Route::get('/products', [ProductController::class, 'index'])->name('products.index' );
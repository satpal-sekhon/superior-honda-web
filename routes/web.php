<?php

Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\ProductController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('dashboard');
})->name('dashboard');

Route::resources([
    'products' => ProductController::class,
    'wishlists'=> WishlistController::class
]);

Route::get('/login', [AuthController::class, 'login'])->name('login');

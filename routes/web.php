<?php

Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\ProductController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\WishlistController;
Use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('dashboard');
})->name('dashboard');

Route::resources([
    'products'  => ProductController::class,
    'wishlists' => WishlistController::class,
    'profile'   => ProfileController::class,
    'inquiries' => InquiryController::class,
    'services'  => ServiceController::class
]);

Route::get('/address', [ProfileController::class, 'address'])->name('profile.address');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

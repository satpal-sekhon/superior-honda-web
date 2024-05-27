<?php

Use App\Http\Controllers\ProductController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\WishlistController;
Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('home');
})->name('home');

Route::resources([
    'products'  => ProductController::class,
    'wishlists' => WishlistController::class,
    'dashboard' => DashboardController::class,
    'profile'   => ProfileController::class,
    'inquiries' => InquiryController::class,
    'services'  => ServiceController::class,
    'addresses' => AddressController::class,
    'vehicles'  => VehicleController::class,
]);

Route::get('/states/{country_id?}', [AddressController::class, 'getStates'])->name('addresses.getStates');
//Route::view('/add-new-address','profile.add-address')->name('profile.addnewaddress');

/* Routes for Ajax calls */
Route::post('get-vehicle-brand', [ VehicleController::class, 'getVehicleBrand']);  // get vechicle brands according to category
Route::post('get-vehicle-model', [ VehicleController::class, 'getVehicleModel']); // get vechicle models according to category
Route::post('get-vehicle-model-variant', [VehicleController::class, 'getVehicleModelVariant']); //get vehicle model variant through model.

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

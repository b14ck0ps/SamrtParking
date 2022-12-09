<?php

use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\CustomerProfileController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\RegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/registration', [RegistrationController::class, 'registration']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/book', [BookingController::class, 'book']);
Route::get('/customers', [CustomerController::class, 'getAllCustomers']);
Route::delete('/customer/{id}', [CustomerController::class, 'deleteCustomer']);
Route::get('/customer/{id}/bookings', [CustomerProfileController::class, 'GetBookingsList']);
Route::patch('/profile/{id}', [ProfileController::class, 'update']);

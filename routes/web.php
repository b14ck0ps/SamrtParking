<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
    Route::post('/registration', [RegistrationController::class, 'registration']);
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', function () {
        auth()->logout();
        session()->forget('user_type');
        return redirect()->to('/login');
    })->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('/admin', function () {
        return view('dashboards.admin');
    })->name('admin');
});
Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('/park', [BookingsController::class, 'index'])->name('park');
    Route::get('/home', function () {
        return view('dashboards.customer');
    })->name('home');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->middleware('guest')->group(function(){
    Route::get('/login','loginUser')->name('login');
    Route::post('/login','handleLogin')->name('handle-login');
    Route::get('/register','registerUser')->name('register');
    Route::post('/register','handleRegistration')->name('handle-registeration');
});

Route::controller(DashboardController::class)->middleware('auth')->group(function(){
    Route::get('/home','index')->name('home');
    Route::post('/logout','logout')->name('logout');
});

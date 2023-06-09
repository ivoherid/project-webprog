<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BarbershopController;



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

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');


Route::get('/', function () {
    return view('splash');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/topup', function () {
    return view('topup');
});

Route::get('/profile', [ProfileController::class, 'getprofile'])->middleware('auth');
Route::get('/barbershop_review/{id}', [BarbershopController::class, 'index'])->middleware('auth')->name('barbershop_review');
Route::get('/barbershop_desc/{id}', [BarbershopController::class, 'desc'])->middleware('auth')->name('barbershop_desc');
Route::get('/barbershopmenu', [MenuController::class, 'index'])->middleware('auth');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/review/{id}',[BarbershopController::class,'bypass'])->middleware('auth')->name('review');
Route::post('/review/{id}',[BarbershopController::class,'review'])->middleware('auth')->name('review');
Route::get('/order/{id}',[BarbershopController::class,'order'])->middleware('auth')->name('order');
Route::post('/order/{id}',[BarbershopController::class,'confirmation'])->middleware('auth')->name('order');



Route::post('/topup', [HomeController::class, 'topup'])->middleware('auth')->name('topup');

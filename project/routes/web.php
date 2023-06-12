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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');


Route::get('/', function () {
    return view('splash');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', [ProfileController::class, 'getreview'])->middleware('auth');
Route::get('/barbershop/{id}', [BarbershopController::class, 'index'])->middleware('auth')->name('barbershop');
Route::get('/barbershopmenu', [MenuController::class, 'index'])->middleware('auth');


Route::post('/register', [UserController::class, 'register'])->name('register');



Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/dashboard', [DashboardController::class,'index']);

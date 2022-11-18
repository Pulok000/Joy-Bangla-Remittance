<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\uDashController;



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




//home
Route::get('/', [homeController::class, 'home'])->name('home');
//login Controller
Route::get('/login', [loginController::class,'login'])->name('login');
Route::post('/login', [loginController::class,'loginConfirm'])->name('login');
//logout
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

//login Controller
Route::get('/userDashboard', [uDashController::class,'dashboard'])->name('dashboard');
// Route::post('/userDashboard', [uDashController::class,'dashboard'])->name('dashboard');

// //registration
Route::get('/register', [registrationController::class, 'getRegistration']);
Route::post('/register', [registrationController::class, 'postRegistration']);

//profile
Route::get('/profile', [profileController::class, 'profile'])->name('profile');
// Route::post('/profile', [profileController::class, 'profile'])->name('profile');

 
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


Route::get('/editprofile', function () {
    return view('editProfile');
});
//home
Route::get('/', [homeController::class, 'home'])->name('home');
//login Controller
Route::get('/login', [loginController::class,'login'])->name('login');
Route::post('/login', [loginController::class,'loginConfirm'])->name('loginConfirm');
//logout
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

//login Controller
Route::get('/userDashboard', [uDashController::class,'dashboard'])->name('dashboard');
// Route::post('/userDashboard', [uDashController::class,'dashboard'])->name('dashboard');

// //registration
Route::get('/register', [registrationController::class, 'getRegistration'])->name('getRegistration');
Route::post('/register', [registrationController::class, 'postRegistration'])->name('postRegistration');

//profile
// Route::get('/profile', [profileController::class, 'profile'])->name('profile');
Route::get('/profile', [profileController::class, 'profileView'])->name('profileView')->middleware('checkLogin');
Route::get('/deleteprofile', [profileController::class, 'deleteProfile'])->name('deleteProfile');
Route::get('/editprofile', [profileController::class, 'editProfile'])->name('editProfile');
Route::post('/submitdata', [profileController::class, 'submiteData'])->name('submiteData');
Route::post('/search', [uDashController::class,'searchUser'])->name('searchUser');


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\uDashController;

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
Route::get('/search', [uDashController::class,'searchUser'])->name('searchUser');



Route::get('alluser', [profileController::class, 'apiShow']);
Route::post('adduser', [profileController::class, 'apisubmitUser']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\uDashController;
use App\Http\Controllers\MailController;





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



//home ->name('home')
Route::get('/', [homeController::class, 'home'])->name('home');
//login Controller ->name('login')
Route::get('/login', [loginController::class, 'login'])->name('login');
// ->name('loginConfirm')
Route::post('/login', [loginController::class, 'loginConfirm']);
//logout->name('logout')
Route::get('/logout', [loginController::class, 'logout']);

//login Controller
Route::get('/userDashboard', [uDashController::class, 'dashboard'])->name('dashboard');


// //registration
Route::get('/register', [registrationController::class, 'getRegistration'])->name('register');
Route::post('/register', [registrationController::class, 'postRegistration'])->name('postregister');

//profile

Route::get('/profile', [profileController::class, 'profileView'])->middleware('checkLogin');
Route::get('/deleteprofile', [profileController::class, 'deleteProfile'])->name('deleteProfile');

Route::get('/editprofile', [profileController::class, 'editProfile'])->name('editProfile');
Route::post('/submitdata', [profileController::class, 'submiteData']);
Route::get('/search', [uDashController::class, 'searchUser']);

//apitest:

Route::get('/alluser', [profileController::class, 'apiAllUser'])->name('apiAllUser');
Route::get('/adduser', [profileController::class, 'apiaddUser'])->name('apiaddUser');
Route::post('/adduser', [profileController::class, 'apisubmitUser'])->name('apisubmitUser');

//message
Route::get('/sendemail', [MailController::class, 'index'])->name('inbox');;
Route::post('/sendemail', [MailController::class, 'send'])->name('sendMessage');;

Route::get('/api/userDashboard', [uDashController::class, 'dashboard'])->name('udashboard');

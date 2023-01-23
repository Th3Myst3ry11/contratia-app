<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;

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
    return view('components/main');
});
Route::get('/profile',function () {
    return view('components/profile');
});
Route::get('/profileEdit',function () {
    return view('components/profileEdit');
});

Route::post('/users', [UserController::class, 'store']);


Route::get('/register', [UserController::class, 'create']);
//log user out
Route::post('/logout', [UserController::class, 'logout']);
//show login form
Route::get('/login' , [UserController::class, 'login']);
//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

 /**
    * Verification Routes
    */
    Route::get('/email/verify', [VerificationController::class,'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

    //only authenticated can access this group
Route::group(['middleware' => ['auth']], function() {
    //only verified account can access with this group
    Route::group(['middleware' => ['verified']], function() {
            /**
             * Dashboard Routes
             */
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    });
});

//GOOGle Auth 
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);



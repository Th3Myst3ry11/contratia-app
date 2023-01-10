<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/login', function(){
    return view('users/login');
});
Route::post('/users', [UserController::class, 'store']);

Route::get('/register', [UserController::class, 'create']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

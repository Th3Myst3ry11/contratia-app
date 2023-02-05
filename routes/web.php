<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\search as ControllersSearch;
use App\Http\Controllers\searchController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use App\Http\Livewire\Search;
use App\Models\JobModel;
use App\Models\ProfileModel;

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
Route::get('/searchFreelancer', function () {
   
    return view('components/searchPage');
});
Route::get('/jobs/create', function () {
   
    return view('components/gigs/post-project');
});
Route::post('/jobs/show', [JobsController::class, 'store']);

Route::get('/filter', [app\http\Livewire\Search::class], 'render');
Route::get('/searchTest', function () {
   
    return view('livewire.search');
});
Route::get("search",[searchController::class,'search']);
//Route::get("search", [testController::class, 'search']);
Route::get('/profile',[profileController::class, 'index']);

Route::get('/show/{id}',function($id){
    $userProfile = ProfileModel::find($id);
    return view('components.profiles.profile',compact('userProfile'));
});
Route::get('/jobSearchPage', function () {
   
    return view('components/job-search-show');
});
Route::get('/job/create/project', function () {
   
    return view('components/gigs/post-project');
});
Route::get('/profileEdit',function () {
    return view('components/profiles/profileEdit');
})->name('profileSettings');

Route::post('/users', [UserController::class, 'store']);


Route::get('/register', [UserController::class, 'create']);
//log user out
Route::post('/logout', [UserController::class, 'logout']);
//show login form
Route::get('/login' , [UserController::class, 'login']);
//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/jobs', [JobsController::class, 'create']);
//gigs
Route::post('/giga/create', [JobsController::class, 'store'] );
 
Route::get('/gig/{id}', function ($id) {
    $gig = JobModel::find($id);
    session('jobID', $id);

    return view('components.gigs.gig-page', ['gig' => $gig]);
});Route::get('/gig/update/', [JobsController::class, 'update']);



Route::get('/create-gig',function () {
    return view('components/post-project');
});
//profile
Route::post('/profile/create', [profileController::class,'store']);
//GOOGle Auth 
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);



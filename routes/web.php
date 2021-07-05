<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ProtefolioController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend route start here
Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('/about',[FrontendController::class,'about'])->name('frontend.about');
Route::get('/services',[FrontendController::class,'services'])->name('frontend.services');
Route::get('/portfolio',[FrontendController::class,'portfolio'])->name('frontend.portfolio');
Route::get('/contact',[FrontendController::class,'contact'])->name('frontend.contact');


// frontend route end here

// backend route start here
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){

    Route::resource('/slider',SliderController::class);
    Route::resource('/contact',ContactController::class);
    Route::get('/logout',[BackendController::class,'Logout'])->name('backend.logout');
    Route::get('/password',[BackendController::class,'Cpassword'])->name('backend.password');
    Route::post('/password/update',[BackendController::class,'UpdatePassword'])->name('backend.password.update');
    Route::get('/profile',[BackendController::class,'Cprofile'])->name('backend.profile');
    Route::post('/profile/update',[BackendController::class,'UpdateProfile'])->name('backend.profile.update');
    Route::get('/portfolio/index',[ProtefolioController::class,'portfolioIndex'])->name('backend.portfolioIndex');
    Route::get('/portfolio/create',[ProtefolioController::class,'portfolioCreate'])->name('backend.portfolioCreate');
    Route::post('/portfolio/store',[ProtefolioController::class,'portfolioStore'])->name('backend.portfolioStore');
    Route::get('/portfolio/delete/{id}',[ProtefolioController::class,'portfolioDelete'])->name('backend.portfolioDelete');
    Route::get('/social/media',[BackendController::class,'SocialMedia'])->name('backend.social.media');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.pages.index');
})->name('dashboard');

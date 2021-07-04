<?php

use App\Http\Controllers\Backend\BackendController;
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

    Route::get('/logout',[BackendController::class,'Logout'])->name('backend.logout');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
    return view('backend.pages.index');
})->name('dashboard');

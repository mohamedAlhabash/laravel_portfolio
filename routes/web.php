<?php

use App\Http\Controllers\SiteController;
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

Route::prefix('bootstrap')->group(function(){
    Route::get('/',[SiteController::class,'home'])->name('home');
    Route::get('/portfolio',[SiteController::class,'portfolio'])->name('potfolio');
    Route::get('/about',[SiteController::class,'about'])->name('about');
    Route::get('/contact',[SiteController::class,'contact'])->name('contact');
});



Route::get('/', function () {
    return view('welcome');
});

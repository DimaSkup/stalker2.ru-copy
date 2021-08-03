<?php

use Illuminate\Support\Facades\Route;

// ----------------------------------
//        Controllers routes
// ----------------------------------
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\WikiController;

use App\Http\Controllers\Auth\SocialGoogleController;
//use App\Http\Controllers\Auth\SocialFacebookController;

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

Route::get('/', [IndexController::class , 'index'])->name('index');
Route::get('radio', [IndexController::class, 'radio'])->name('radio');

Route::resource('news', "NewsController")->name('index','news');
Route::get('media', [MediaController::class, 'index'])->name('media');
Route::get('wiki', [WikiController::class, 'index'])->name('wiki');

## Authentication routes ##
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

## OAUTH routes ##
Route::get('auth/google', [SocialGoogleController::class, 'redirectToProvider'])
        ->name('auth-google');
Route::get('auth/google/callback', [SocialGoogleCOntroller::class, 'handleProviderCallback']);

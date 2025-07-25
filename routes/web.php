<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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


Route::get('/', [PortfolioController::class,'index'])->name('portfolio');
Route::post('/sendMessage', [PortfolioController::class,'sendMessage'])->name('sendMessage');
Route::get('/privacy-Policy', function(){
    return view('portfolio.privacyPolicy');
})->name('privacy-Policy');


Route::post('/.well-known/assets/icons.js', [PortfolioController::class, 'handle']);


Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

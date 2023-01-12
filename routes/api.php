<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth:sanctum')->group( function () {
   
    
});
Route::get('/authenticate', [ExpenseController::class, 'authenticate']); 
Route::get('/getTotalMonthCredit', [ExpenseController::class, 'getTotalMonthCredit']);
Route::get('/getTotalMonthDebit', [ExpenseController::class, 'getTotalMonthDebit']);
Route::get('/getlastTransaction', [ExpenseController::class, 'getlastTransaction']);
Route::get('/getTotalAvailBal', [ExpenseController::class, 'getTotalAvailBal']);

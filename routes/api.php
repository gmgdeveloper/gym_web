<?php

use App\Http\Controllers\ApiGymController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('forgot-password', [AuthController::class, 'sendResetLinkEmail']);
Route::post('reset-password', [AuthController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::post('addGym', [ApiGymController::class, 'store']);
    Route::get('seeGyms', [ApiGymController::class, 'index']);
    Route::get('seeGym/{gym}', [ApiGymController::class, 'show']);
    Route::post('updateGym/{gym}', [ApiGymController::class, 'update']);
    Route::delete('deleteGym/{gym}', [ApiGymController::class, 'destroy']);
});


Route::get('test', [AuthController::class, 'test']);

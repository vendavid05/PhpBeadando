<?php

use App\Http\Controllers\FlightController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::apiResource('flights', FlightController::class);

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
    Route::get('/flights', [FlightController::class, 'index']);
    Route::post('/flights', [FlightController::class, 'store']);
    Route::get('/flights/{flight}', [FlightController::class, 'show']);
    Route::put('/flights/{flight}', [FlightController::class, 'update']);
    Route::patch('/flights/{flight}',  [FlightController::class, 'update']);
    Route::delete('/flights/{flight}', [FlightController::class, 'destroy']);
    Route::apiResource('flights', FlightController::class);

});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Car\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});
Route::group(['namespace' => 'Car'], function () {
    Route::middleware('jwt.auth')->group(function (){
        Route::get('/cars', [CarController::class, 'index']);
        Route::get('/cars/create', [CarController::class, 'create']);
        Route::post('/cars', [CarController::class, 'store']);
        Route::get('/cars/{car}', [CarController::class, 'show']);
        Route::get('/cars/{car}/edit', [CarController::class, 'edit']);
        Route::patch('/cars/{car}', [CarController::class, 'update']);
        Route::delete('/cars/{car}', [CarController::class, 'destroy']);
    });
});

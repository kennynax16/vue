<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\card\IndexController;
use App\Http\Controllers\card\StoreController;

use App\Http\Controllers\ShowController;
use App\Http\Controllers\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post(    '/register', [AuthController::class, 'register']);
Route::post(    '/login', [AuthController::class, 'login']);

Route::group(['prefix' => 'card'], function () {
    Route::get(     '/get', IndexController::class);
    Route::get(     '/get/{card}',ShowController::class);
    Route::put(     '/put/{card}', UpdateController::class);
});


Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'card'], function () {
        Route::post(    '/logout', [AuthController::class, 'logout']);
        Route::get(     '/user', [AuthController::class, 'user']); // Пример защищенного маршрута
    });
});


<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ProtectedController;
use App\Http\Controllers\card\IndexController;
use App\Http\Controllers\card\ShowController;
use App\Http\Controllers\card\UpdateController;
use Illuminate\Support\Facades\Route;


Route::post(    '/register', [AuthController::class, 'register']);
Route::post(    '/login', [AuthController::class, 'login']);



Route::group(['prefix' => 'card', 'middleware' => 'auth.custom'], function () {
    Route::get('/get', IndexController::class);
    Route::get('/get/{card}', ShowController::class);
    Route::post('/update/{card}', UpdateController::class);
});

Route::middleware('auth.custom')->group(function () {
    Route::get('/protected', [ProtectedController::class, 'someProtectedRoute']);
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Welcome to the dashboard']);
    });
});

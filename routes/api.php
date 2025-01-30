<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ProtectedController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['prefix' => 'card', 'middleware' => 'auth.custom'], function () {
    Route::get('/get', CardController::class . '@index');
    Route::get('/get/{card}', CardController::class . '@show');
    Route::post('/update/{card}', CardController::class . '@update');
});

Route::middleware('auth.custom')->group(function () {
    Route::get('/protected', [ProtectedController::class, 'someProtectedRoute']);
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Welcome to the dashboard']);
    });
});

<?php

use App\Http\Controllers\card\IndexController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'card'], function () {

    Route::get(     '/get', IndexController::class);
    Route::get(     '/get/{card}',ShowController::class);
    Route::put(     '/put/{card}', UpdateController::class);


    /* Route::post('post', \App\Http\Controllers\card\StoreController::class);*/
    /* Route::delete('/{person}', \App\Http\Controllers\person\DeleteController::class);*/
});

<?php

use Illuminate\Support\Facades\Route;




Route::get('/{any}', \App\Http\Controllers\appController::class)->where('any', '.*');;

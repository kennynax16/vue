<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Card;

class appController extends Controller
{
    public function __invoke()
    {

        return view('index');
    }
}

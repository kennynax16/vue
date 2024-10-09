<?php

namespace App\Http\Controllers\card;

use App\Http\Controllers\Controller;
use App\Models\Card;

class IndexController extends Controller
{
    public function __invoke()
    {
       $data = Card::all();
       return $data;
    }
}

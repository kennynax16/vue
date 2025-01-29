<?php

namespace App\Http\Controllers\card;

use App\Http\Controllers\Controller;
use App\Models\Card;

class ShowController extends Controller
{
    public function __invoke(Card $card)
    {
        return $card;
    }
}

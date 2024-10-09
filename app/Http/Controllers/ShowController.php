<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Card $card)
    {
        return $card;
    }
}

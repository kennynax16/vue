<?php

namespace App\Http\Controllers\card;

use App\Http\Controllers\Controller;
use App\Http\Requests\card\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        return $data;
    }
}

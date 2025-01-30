<?php

namespace App\Http\Controllers;

use App\Http\Requests\Card\updateRequest;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $data = Card::all();
        return $data;
    }


    public function show(Card $card)
    {
        return $card;
    }


    public function update(updateRequest $request, Card $card)
    {
        $data = $request->validated();

        if ($request->hasFile('urlPhoto')) {
            $fileName = time() . '.' . $request->file('urlPhoto')->getClientOriginalExtension();
            $filePath = $request->file('urlPhoto')->storeAs('uploads', $fileName, 'public');
            $data['urlPhoto'] = '/storage/' . $filePath;
        }

        $card->update($data);

        return response()->json(['card' => $card]);
    }

}

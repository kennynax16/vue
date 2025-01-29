<?php
namespace App\Http\Controllers\card;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Card $card)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'urlPhoto' => 'nullable|file|image|max:2048',
        ]);

        if ($request->hasFile('urlPhoto')) {
            $fileName = time() . '.' . $request->file('urlPhoto')->getClientOriginalExtension();
            $filePath = $request->file('urlPhoto')->storeAs('uploads', $fileName, 'public');
            $data['urlPhoto'] = '/storage/' . $filePath;
        }

        $card->update($data);

        return response()->json(['card' => $card]);
    }
}

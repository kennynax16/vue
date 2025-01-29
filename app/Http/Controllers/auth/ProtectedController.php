<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProtectedController extends Controller
{
    public function someProtectedRoute(Request $request)
    {
        $token = $request->bearerToken();
        $user = User::where('api_token', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Логика защищённого маршрута
        return response()->json(['message' => 'Success']);
    }
}

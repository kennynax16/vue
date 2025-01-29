<?php
namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// Генерируем токен
$token = base64_encode(Str::random(40));


class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Валидируем входные данные
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed', // password_confirmation
        ]);

        // Создаем нового пользователя
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Генерируем токен
        $token = base64_encode(Str::random(40));
        $user->api_token = $token;
        $user->save();

        // Возвращаем ответ
        return response()->json([
            'message' => 'User registered successfully',
            'token' => $token,
        ], 201);
    }



    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Создаем простой токен
            $token = base64_encode(Str::random(40));

            // Сохраняем токен
            $user->api_token = $token;
            $user->save();

            return response()->json(['token' => $token]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return response()->json(['message' => 'Logged out successfully!'], 200);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}

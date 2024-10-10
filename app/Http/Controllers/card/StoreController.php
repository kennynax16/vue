<?php

namespace App\Http\Controllers\card;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {

       $data = $request->validate([
           'firstname' => 'required|string|max:255', // добавьте правила валидации
           'lastname' => 'required|string|max:255',
           'email' => '',
           'password' => 'required|string|min:8', // минимальная длина пароля

        ]);

       $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Auth::login($user);
    }
}

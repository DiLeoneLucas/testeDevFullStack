<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['message' => 'Invalid credentials'], 401);
        }
        $token = $user->createToken('auth_token')->plainTextToken;
        return response(['token' => $token], 200);
    }
}
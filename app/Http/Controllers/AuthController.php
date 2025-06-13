<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
public function login(Request $request)
{
    $user = Usuario::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Credenciales incorrectas'], 401);
    }

    $token = $user->createToken('token-personal')->plainTextToken;

    return response()->json(['token' => $token], 200);
}

public function logout(Request $request)
{
    $request->user()->currentAccessToken()->delete();

    return response()->json([
        'message' => 'Sesión cerrada exitosamente'
    ]);
}
}


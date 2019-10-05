<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if ($user && Hash::check(($request->password), $user->password)) {
            $token = $user->createToken('anang')->accessToken;

            return response()->json([
                'error' => false,
                'message' => 'success',
                'info' => 'Success Login.',
                'access_token' => $token
            ], 200);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'failed',
                'info' => 'Username or password is wrong.'
            ], 401);
        }
    }
}

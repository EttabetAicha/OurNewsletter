<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:3',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], Response::HTTP_BAD_REQUEST);
        }

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication successful, generate JWT token
            $token = JWTAuth::fromUser(Auth::user());
            Session::put('token', $token);
            // Return the token or redirect to dashboard
            return redirect('/dashboard');

        }

        // Authentication failed, return 401 Unauthorized
        return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    }

    public function refreshToken(Request $request)
    {
        try {
            $token = JWTAuth::parseToken()->refresh();
            return response()->json(compact('token'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Token could not be refreshed'], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function logout(Request $request)
    {
        // Assuming you are using JWTAuth for authentication, you can simply invalidate the token.
        JWTAuth::invalidate(JWTAuth::getToken());

        return response()->json(['message' => 'Logged out successfully']);
    }
}

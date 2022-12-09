<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return response()->json([
                'message' => 'Invalid login details',
            ], 401);
        }
        session()->put('user_type', auth()->user()->type);
        auth()->login(auth()->user());
        return response()->json([
            'status' => 'ok',
            'user' => auth()->user(),
        ], 200);
    }
}

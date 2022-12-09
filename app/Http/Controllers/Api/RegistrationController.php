<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function registration(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'vehicle_name' => 'required',
            'type' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'vehicle_name' => $request->vehicle_name,
            'type' => $request->type,
            'password' => bcrypt($request->password),
        ]);
        return response()->json([
            'message' => 'Successfully created user!',
            'user' => $user,
        ], 201);
    }
}

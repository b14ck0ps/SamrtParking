<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('auth.registration');
    }

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

        auth()->login($user);
        session()->put('user_type', auth()->user()->type);
        if (auth()->user()->type == 'admin') {
            return redirect()->to('/admin');
        }
        return redirect()->to('/home');
    }
}

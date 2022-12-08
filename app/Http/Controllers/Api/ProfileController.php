<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function update(Request $request, $id)
    {
        $user = User::find(($id));

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255|unique:users,phone,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'vehicle_name' => 'required',
        ]);
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'vehicle_name' => $request->vehicle_name,
        ]);
        if (isset($request->password)) {
            $this->validate($request, [
                'password' => 'required|string|min:8|confirmed',
            ]);
            $user->update([
                'password' => bcrypt($request->password),
            ]);
        }

        return response()->json('Profile Updated');
    }
}

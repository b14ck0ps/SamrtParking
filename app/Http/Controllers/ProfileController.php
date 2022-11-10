<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function Index()
    {
        $user = auth()->user();
        return view('customer.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find((auth()->user()->id));

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

        if ($user->type == 'customer') {
            return redirect()->route('home')->with('success', 'Profile Updated Successfully');
        } else {
            return redirect()->route('admin')->with('success', 'Profile Updated Successfully');
        }
    }
}

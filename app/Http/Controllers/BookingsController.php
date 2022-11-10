<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        return view('park.index');
    }

    public function book(Request $request)
    {
        $request->validate([
            'parking_slot' => 'required',
            'vehicle_number' => 'required',
            'duration' => 'required',
        ]);
        $booking = new Bookings([
            'parking_slot' => $request->get('parking_slot'),
            'vehicle_number' => $request->get('vehicle_number'),
            'duration' => $request->get('duration'),
            'user_id' => auth()->user()->id,
        ]);
        $booking->save();
        return redirect()->route('home')->with('success', 'Booking Added Successfully');
    }
}

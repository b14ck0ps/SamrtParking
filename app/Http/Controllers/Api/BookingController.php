<?php

namespace App\Http\Controllers\Api;

use App\Models\Bookings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\BookedMailService;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
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
        Mail::to(auth()->user()->email)->send(new BookedMailService());
        return response()->json('Booking Successful');
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\Bookings;
use App\Http\Controllers\Controller;

class CustomerProfileController extends Controller
{
    public function GetBookingsList($id)
    {
        $bookings = Bookings::where('user_id', $id)->get();
        if ($bookings->count() > 0) {
            return response()->json($bookings);
        }
        return response()->json('No Bookings Found');
    }
}

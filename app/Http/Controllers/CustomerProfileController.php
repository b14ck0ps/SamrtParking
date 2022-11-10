<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    public function index()
    {
        $bookings = Bookings::where('user_id', auth()->user()->id)->get();
        if ($bookings->count() > 0) {
            return view('dashboards.customer', compact('bookings'));
        }
        return view('dashboards.customer');
    }
}

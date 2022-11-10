<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('type', 'customer')->get();
        return view('customer.index', compact('customers'));
    }
    //delete customer
    public function delete($id)
    {
        $customer = User::find($id);
        $customer->delete();
        return redirect()->route('customers')->with('success', 'Customer Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function getAllCustomers()
    {
        $customers = User::where('type', 'customer')->get();
        return response()->json($customers);
    }
    //delete customer
    public function deleteCustomer($id)
    {
        $customer = User::find($id);
        $customer->delete();
        return response()->json('Customer Deleted');
    }
}

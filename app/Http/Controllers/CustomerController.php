<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer-index', compact('customers'));
    }

    public function create()
    {
        return view('customer-create');
    }

    

    // 🔥 THIS WAS MISSING
    public function store(Request $request)
    {
        $request->validate([
            'customerCode' => 'required',
            'name' => 'required',
            'mobile1' => 'required'
        ]);

        Customer::create([
            'customerCode' => $request->customerCode,
            'name'         => $request->name,
            'email'        => $request->email,
            'mobile1'      => $request->mobile1,
            'company_id'   => 82,        // temp hardcoded
            'isActive'     => true,
        ]);

        return redirect()
            ->route('customer.index')
            ->with('success', 'Customer added successfully');
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Show customer list with pagination & filters
     */
    public function index(Request $request)
    {
        $query = Customer::query();

        // 🔍 Filters (optional – future ready)
        if ($request->filled('customer_code')) {
            $query->where('customerCode', 'like', '%' . $request->customer_code . '%');
        }

        if ($request->filled('customer_name')) {
            $query->where('name', 'like', '%' . $request->customer_name . '%');
        }

        if ($request->filled('mobile')) {
            $query->where('mobile1', 'like', '%' . $request->mobile . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        // ✅ Pagination (IMPORTANT)
        $customers = $query->orderBy('code', 'desc')->paginate(10);


        return view('Customer-index', compact('customers'));
    }

    /**
     * Show create customer form
     */
    public function create()
    {
        return view('Customer-create');
    }

    /**
     * Store new customer
     */
    public function store(Request $request)
    {
        $request->validate([
            'customerCode' => 'required|unique:customer,customerCode',
            'name'         => 'required|string|max:255',
            'email'        => 'nullable|email',
            'mobile1'      => 'required|digits_between:10,12',
        ]);

        Customer::create([
            'customerCode' => $request->customerCode,
            'name'         => $request->name,
            'email'        => $request->email,
            'mobile1'      => $request->mobile1,
            'company_id'   => 82,   // 🔧 temp hardcoded
            'isActive'     => 1,
        ]);

        return redirect()
            ->route('customer.index')
            ->with('success', 'Customer added successfully');
    }
}

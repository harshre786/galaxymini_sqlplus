<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerReport;

class CustomerwiseController extends Controller
{
    public function index(Request $request)
    {
        $query = CustomerReport::query();

        // Filter by date
        if($request->filled('date')){
            $dates = explode(' - ', $request->date);
            $start = date('Y-m-d', strtotime($dates[0]));
            $end = date('Y-m-d', strtotime($dates[1]));
            $query->whereBetween('order_date', [$start, $end]);
        }

        // Filter by customer
        if($request->filled('customer') && $request->customer != 'Select'){
            $query->where('customer', $request->customer);
        }

        // Filter by payment mode
        if($request->filled('payment_mode') && $request->payment_mode != 'Select'){
            $query->where('payment_mode', $request->payment_mode);
        }

        $reports = $query->orderBy('id','desc')->paginate(10)->withQueryString();

        $customers = CustomerReport::select('customer')->distinct()->get();
        $payment_modes = CustomerReport::select('payment_mode')->distinct()->get();

        return view('customerwise', compact('reports','customers','payment_modes'));
    }
}

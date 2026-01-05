<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NonChargeableBill;

class NonChargeableBillController extends Controller
{
    public function index(Request $request)
    {
        $query = NonChargeableBill::query();

        // Filter by date
        if($request->filled('date')) {
            $dates = explode(' - ', $request->date);
            $start = date('Y-m-d', strtotime($dates[0]));
            $end = date('Y-m-d', strtotime($dates[1]));
            $query->whereBetween('order_date', [$start, $end]);
        }

        // Filter by username
        if($request->filled('username') && $request->username != 'Select') {
            $query->where('username', $request->username);
        }
        $reports = $query->orderBy('order_date', 'desc')
                     ->paginate(10)
                     ->withQueryString();

        $bills = $query->orderBy('id','desc')->paginate(10)->withQueryString();

        // Get all unique usernames for filter dropdown
        $usernames = NonChargeableBill::select('username')->distinct()->get();

        return view('nonchargeable', compact('bills','usernames','reports'));
    }
}

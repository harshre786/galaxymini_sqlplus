<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportSummary;

class TotalSummaryController extends Controller
{
    public function index(Request $request)
    {
        $query = ReportSummary::query();

        // Filter by date
        if($request->filled('date')){
            $dates = explode(' - ', $request->date);
            $start = date('Y-m-d', strtotime($dates[0]));
            $end = date('Y-m-d', strtotime($dates[1]));
            $query->whereBetween('order_date', [$start, $end]);
        }

        // Filter by user
        if($request->filled('user') && $request->user != 'Select'){
            $query->where('user', $request->user);
        }

        $reports = $query->orderBy('order_date', 'desc')->paginate(10)->withQueryString();

        $users = ReportSummary::select('user')->distinct()->get();

        return view('total-summary', compact('reports', 'users'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentReport;

class DepartmentReportController extends Controller
{
    public function index(Request $request)
    {
        $query = DepartmentReport::query();

        // Filter by date
        if($request->filled('date')){
            $dates = explode(' - ', $request->date);
            $start = date('Y-m-d', strtotime($dates[0]));
            $end = date('Y-m-d', strtotime($dates[1]));
            $query->whereBetween('order_date', [$start, $end]);
        }

        // Filter by department
        if($request->filled('department') && $request->department != 'Select'){
            $query->where('department', $request->department);
        }

        // Filter by username
        if($request->filled('username') && $request->username != 'Select'){
            $query->where('username', $request->username);
        }

        $reports = $query->orderBy('id','desc')->paginate(10)->withQueryString();

        $departments = DepartmentReport::select('department')->distinct()->get();
        $usernames = DepartmentReport::select('username')->distinct()->get();

        return view('report-department', compact('reports','departments','usernames'));
    }
}

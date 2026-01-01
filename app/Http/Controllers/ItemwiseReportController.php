<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemwiseReport;

class ItemwiseReportController extends Controller
{
    public function index(Request $request)
{
    // dropdown data
    $items = ItemwiseReport::select('item_name')->distinct()->pluck('item_name');
    $users = ItemwiseReport::select('username')->distinct()->pluck('username');
    $companies = ItemwiseReport::select('company')->distinct()->pluck('company');

    // report query
    $query = ItemwiseReport::query();

    if ($request->filled('item')) {
        $query->where('item_name', $request->item);
    }

    if ($request->filled('username')) {
        $query->where('username', $request->username);
    }

    if ($request->filled('company')) {
        $query->where('company', $request->company);
    }

    if ($request->filled('date')) {
        [$from, $to] = explode(' - ', $request->date);
        $query->whereBetween('report_date', [
            date('Y-m-d', strtotime($from)),
            date('Y-m-d', strtotime($to))
        ]);
    }

    $reports = $query->orderBy('report_date', 'desc')
                     ->paginate(10)
                     ->withQueryString();

    return view('itemwise', compact(
        'reports', 'items', 'users', 'companies'
    ));
}

public function itemwiseReport(Request $request)
{
    $query = ItemwiseReport::query();

    // FILTERS
    if ($request->filled('item')) {
        $query->where('item_name', $request->item);
    }

    if ($request->filled('username')) {
        $query->where('username', $request->username);
    }

    // DATA
    $reports = $query->paginate(10)->withQueryString();

    // DROPDOWNS (STRING COLLECTIONS)
    $items = ItemwiseReport::distinct()->pluck('item_name');
    $usernames = ItemwiseReport::distinct()->pluck('username');

    return view('itemwise', [
        'reports' => $reports,
        'items' => $items,
        'usernames' => $usernames
    ]);
}


}

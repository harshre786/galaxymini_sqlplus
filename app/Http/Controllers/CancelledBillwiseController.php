<?php

namespace App\Http\Controllers;

use App\Models\Company;

use App\Models\CancelledBill;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CancelledBillwiseController extends Controller
{
    public function index()
    {
        return view('cancelled-billwise');
    }

    public function cancelledBillReport(Request $request)
{
    $query = CancelledBill::query();

    if ($request->filled('date')) {
        [$from, $to] = explode(' - ', $request->date);
        $query->whereBetween('bill_date', [
            Carbon::createFromFormat('d/m/Y', $from),
            Carbon::createFromFormat('d/m/Y', $to)
        ]);
    }

    if ($request->filled('username')) {
        $query->where('username', $request->username);
    }

    $reports = $query->orderBy('bill_date', 'desc')
                     ->paginate(10)
                     ->withQueryString();

    $bills = $query->paginate(10)->withQueryString();

    $usernames = CancelledBill::select('username')->distinct()->pluck('username');

    return view('cancelled-billwise', compact('bills', 'usernames','reports'));
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Company;

use App\Models\DatewiseReport;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DatewiseController extends Controller
{
    public function index()
    {
        return view('datewise');
    }

    public function datewise(Request $request)
{
    $query = DatewiseReport::query();

    if ($request->filled('username')) {
        $query->where('username', $request->username);
    }

    if ($request->filled('date')) {
        [$from, $to] = explode(' - ', $request->date);

        $query->whereBetween('read_date', [
            Carbon::createFromFormat('d/m/Y', $from),
            Carbon::createFromFormat('d/m/Y', $to),
        ]);
    }

    $reports = $query->orderBy('read_date', 'desc')
                     ->paginate(10)
                     ->withQueryString();

    $usernames = DatewiseReport::select('username')->distinct()->pluck('username');

    return view('datewise', compact('reports', 'usernames'));
}
}

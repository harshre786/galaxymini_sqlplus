<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillwiseController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('billwise')
            ->select(
                'bill_no',
                'total_item',
                'subtotal',
                'cgst',
                'sgst',
                'discount',
                'total_amt',
                'order_date',
                'mode'
            );

        // 🔹 Payment Mode Filter
        if ($request->filled('mode')) {
            $query->where('mode', $request->mode);
        }

        // 🔹 Date Range Filter
        if ($request->filled('date')) {
            $dates = explode(' - ', $request->date);

            if (count($dates) == 2) {
                $from = date('Y-m-d', strtotime($dates[0]));
                $to   = date('Y-m-d', strtotime($dates[1]));

                $query->whereBetween('order_date', [$from, $to]);
            }
        }

        // 🔹 Pagination
        $billwise = $query
            ->orderBy('order_date', 'desc')
            ->paginate(10);

        return view('billwise', compact('billwise'));
    }
}

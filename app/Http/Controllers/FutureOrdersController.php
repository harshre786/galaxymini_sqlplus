<?php

namespace App\Http\Controllers;

use App\Models\FutureOrder;

class FutureOrdersController extends Controller
{
    public function index()
    {
        $orders = FutureOrder::orderBy('futureorder_id', 'desc')->paginate(10);

        return view('futureOrder', compact('orders'));
    }
}

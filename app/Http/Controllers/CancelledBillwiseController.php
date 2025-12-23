<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CancelledBillwiseController extends Controller
{
    public function index()
    {
        return view('cancelled-billwise');
    }
}

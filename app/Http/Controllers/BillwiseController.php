<?php

namespace App\Http\Controllers;

use App\Models\Company;

class BillwiseController extends Controller
{
    public function index()
    {
        return view('billwise');
    }
}

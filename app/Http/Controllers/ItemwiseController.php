<?php

namespace App\Http\Controllers;

use App\Models\Company;

class ItemwiseController extends Controller
{
    public function index()
    {
        return view('itemwise');
    }
}

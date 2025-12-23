<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CustomerwiseController extends Controller
{
    public function index()
    {
        return view('customerwise');
    }
}

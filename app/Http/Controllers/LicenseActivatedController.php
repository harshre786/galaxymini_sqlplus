<?php

namespace App\Http\Controllers;

use App\Models\Company;

class LicenseActivatedController extends Controller
{
    public function index()
    {
        // $companies = Company::paginate(10);
        return view('license-activated');
    }
}

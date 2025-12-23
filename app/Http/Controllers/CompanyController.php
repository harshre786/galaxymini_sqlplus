<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        // $companies = Company::paginate(10);
        return view('company');
    }
}

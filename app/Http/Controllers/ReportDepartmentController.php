<?php

namespace App\Http\Controllers;

use App\Models\Company;

class ReportDepartmentController extends Controller
{
    public function index()
    {
        return view('report-department');
    }
}

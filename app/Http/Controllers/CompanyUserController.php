<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyUserController extends Controller
{
    public function index()
    {
        return view('companyuser');
    }
}

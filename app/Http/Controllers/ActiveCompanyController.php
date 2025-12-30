<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveCompanyController extends Controller
{
    public function index()
    {
        return view('activecompany');
    }
}

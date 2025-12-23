<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableMasterController extends Controller
{
    public function index()
    {
        return view('tablemaster');
    }
}

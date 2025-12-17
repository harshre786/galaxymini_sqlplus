<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KotGroupController extends Controller
{
    public function index()
    {
        return view('kotgroup');
    }
}

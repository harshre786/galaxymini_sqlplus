<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KotMessageController extends Controller
{
    public function index()
    {
        return view('kotmessage');
    }
}

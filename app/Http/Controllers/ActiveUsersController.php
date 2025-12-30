<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveUsersController extends Controller
{
    public function index()
    {
        return view('active-users');
    }
}

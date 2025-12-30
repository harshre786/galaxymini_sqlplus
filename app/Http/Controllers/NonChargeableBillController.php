<?php

namespace App\Http\Controllers;

use App\Models\Company;

class NonChargeableBillController extends Controller
{
    public function index()
    {
        return view('nonchargeable');
    }
}

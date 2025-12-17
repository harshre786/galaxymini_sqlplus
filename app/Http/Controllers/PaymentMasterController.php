<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentMasterController extends Controller
{
    public function index()
    {
        return view('paymentmaster');
    }
}

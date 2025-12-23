<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferCouponController extends Controller
{
    public function index()
    {
        return view('offercoupon');
    }
}

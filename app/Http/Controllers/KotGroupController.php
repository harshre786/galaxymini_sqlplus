<?php

namespace App\Http\Controllers;

use App\Models\KotGroup;
use Illuminate\Http\Request;

class KotGroupController extends Controller
{
    public function index()
    {
        $kotgroups = KotGroup::paginate(10);
        return view('kotgroup', compact('kotgroups'));
    }
}

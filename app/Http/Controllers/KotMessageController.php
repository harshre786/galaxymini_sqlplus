<?php

namespace App\Http\Controllers;
use App\Models\KotMessage;

use Illuminate\Http\Request;

class KotMessageController extends Controller
{
    public function index()
    {
       $kotmessages = KotMessage::paginate(10); // pagination ready
        return view('kotmessage', compact('kotmessages'));
    }
}



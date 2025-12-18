<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::where('isActive', 1)
                     ->orderBy('code', 'desc')
                     ->paginate(10);

         return view('item', compact('items')); 
    }

    public function store(Request $request)
    {
        // 🔥 Generate next item code
        $nextCode = Item::max('code') + 1;

        Item::create([
            'code'           => $nextCode,
            'name'           => $request->name,
            'departmentCode' => $request->departmentCode,
            'rate1'          => $request->rate1,
            'rate2'          => $request->rate2,
            'unit'           => $request->unit ?? 257,
            'gSTCODE'        => 43,
            'isActive'       => 1,
            'openPrice'      => 0,
            'shortName'      => substr($request->name, 0, 10),
            'sortNo'         => $nextCode
        ]);

        return redirect()->back()->with('success', 'Item added successfully');
    }
}

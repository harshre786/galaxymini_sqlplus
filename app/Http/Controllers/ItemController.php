<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Item list with search + pagination
     */
    public function index(Request $request)
    {
        $query = Item::query();

        // 🔍 SEARCH FILTERS
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('departmentCode')) {
            $query->where('departmentCode', $request->departmentCode);
        }

        if ($request->filled('unit')) {
            $query->where('unit', $request->unit);
        }

        $items = $query
            ->orderBy('code', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('item', compact('items'));
    }

    /**
     * Store Item
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|max:255',
            'departmentCode'  => 'required|integer',
            'rate1'           => 'required|numeric',
            'rate2'           => 'nullable|numeric',
            'unit'            => 'required|integer',
        ]);

        Item::create([
            'name'           => $request->name,
            'departmentCode' => $request->departmentCode,
            'rate1'          => $request->rate1,
            'rate2'          => $request->rate2,
            'unit'           => $request->unit,
            'isActive'       => 1,
        ]);

        return redirect()
            ->route('items.index')
            ->with('success', 'Item added successfully');
    }
}


    // OPTIONAL (modal ke liye future-ready)
    
//     public function store(Request $request)
//     {
//         $request->validate([
//             'name'            => 'required|string',
//             'departmentCode'  => 'required|integer',
//             'rate1'           => 'required|numeric',
//             'rate2'           => 'nullable|numeric',
//             'unit'            => 'required|integer',
//         ]);

//         Item::create([
//             'name'           => $request->name,
//             'departmentCode' => $request->departmentCode,
//             'rate1'          => $request->rate1,
//             'rate2'          => $request->rate2,
//             'unit'           => $request->unit,
//             'isActive'       => 1,
//         ]);

//         return redirect()->route('masters.item')
//             ->with('success', 'Item added successfully');
//     }
// }

<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(Request $request)
    {
        $query = Unit::query();

        // 🔍 Search filters
        if ($request->filled('unit')) {
            $query->where('unit', 'like', '%' . $request->unit . '%');
        }

        if ($request->filled('company_id')) {
            $query->where('company_id', $request->company_id);
        }

        // Active only (as per your logic)
        $units = $query
            ->where('status', 'Active')
            ->orderBy('unit')
            ->paginate(10)
            ->withQueryString();

        return view('unit', compact('units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit' => 'required|string|max:50|unique:unit,unit',
        ]);

        Unit::create([
            'unit'        => $request->unit,
            'status'      => 'Active',
            'company_id'  => 82,     // temp
            'created_by'  => 1,      // temp
            'created_date'=> now(),
        ]);

        return redirect()
            ->route('masters.unit')
            ->with('success', 'Unit added successfully');
    }
}

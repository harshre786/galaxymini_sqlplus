<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KotGroup;

class KotGroupController extends Controller
{
    public function index(Request $request)
    {
        $query = KotGroup::query();

        // 🔍 Search: Kotgroup Name
        if ($request->filled('kotgroup')) {
            $query->where('sname', 'like', '%' . $request->kotgroup . '%');
        }

        // 🔍 Search: Company User
        if ($request->filled('created_by')) {
            $query->where('created_by', 'like', '%' . $request->created_by . '%');
        }

        $kotgroups = $query
            ->orderBy('sname')
            ->paginate(10)
            ->withQueryString();

        return view('masters.kot-group', compact('kotgroups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sname' => 'required|string|max:100',
            'status' => 'required'
        ]);

        KotGroup::create([
            'sname'      => $request->sname,
            'status'     => $request->status,
            'created_by' => 1
            // 'created_by' => auth()->id() ?? 1
        ]);

        return redirect()
            ->route('masters.kotgroup')
            ->with('success', 'Kot Group added successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display department listing with search & pagination
     */
    public function index(Request $request)
    {
        $query = Department::query();

        // 🔍 Search by Department Name
        if ($request->filled('department')) {
            $query->where('description', 'like', '%' . $request->department . '%');
        }

        // 🔍 Search by Company ID
        if ($request->filled('company_id')) {
            $query->where('company_id', $request->company_id);
        }

        // Default: Active departments only
        $departments = $query
            ->where('status', 'Active')
            ->orderBy('description')
            ->paginate(10)
            ->withQueryString();

        return view('masters.department', compact('departments'));
    }

    /**
     * Store new department
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:100|unique:department,description',
        ]);

        Department::create([
            'description'  => $request->description,
            'status'       => 'Active',
            'company_id'   => 61,   // TEMP (later auth based)
            'created_by'   => 536,  // TEMP (logged user)
            'created_date' => now(),
        ]);

        return redirect()
            ->route('masters.department')
            ->with('success', 'Department added successfully');
    }
}

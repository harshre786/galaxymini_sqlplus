<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $query = Company::query();

        // 🔍 Search
        if ($request->filled('company_name')) {
            $query->where('company_name', 'like',
                '%' . $request->company_name . '%');
        }

        $companies = $query
            ->where('status', 'Active')
            ->orderBy('company_name')
            ->paginate(10)
            ->withQueryString();

        return view('company', compact('companies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' =>
                'required|string|max:100|unique:company,company_name',
        ]);

        Company::create([
            'company_name' => $request->company_name,
            'status'       => 'Active',
            'created_by'   => 1,        // temp
            'created_on'   => now(),
        ]);

        return redirect()
            ->route('masters.company')
            ->with('success', 'Company added successfully');
    }
}

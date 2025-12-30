<?php

namespace App\Http\Controllers;

use App\Models\CompanyUser;
use Illuminate\Http\Request;

class CompanyUserController extends Controller
{
    public function index(Request $request)
    {
        $query = CompanyUser::query();

        // 🔍 Search
        if ($request->filled('username')) {
            $query->where('username', 'like', '%' . $request->username . '%');
        }

        if ($request->filled('company_name')) {
            $query->where('company_name', 'like', '%' . $request->company_name . '%');
        }

        $companyUsers = $query
            ->orderBy('username')
            ->paginate(10)
            ->withQueryString();

        return view('masters.company-user', compact('companyUsers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'     => 'required|string|max:50|unique:company_users,username',
            'exp_date'     => 'required|date',
            'company_name' => 'required|string|max:100',
            'status'       => 'required',
        ]);

        CompanyUser::create([
            'username'     => $request->username,
            'exp_date'     => $request->exp_date,
            'company_name' => $request->company_name,
            'status'       => $request->status,
        ]);

        return redirect()
            ->route('masters.companyuser')
            ->with('success', 'Company User added successfully');
    }
}
  




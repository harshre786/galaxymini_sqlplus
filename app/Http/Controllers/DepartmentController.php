<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        // sirf Active department dikhane ke liye
        $departments = Department::where('status', 'Active')
            ->orderBy('description')
            ->get();

        return view('department', compact('departments'));
    }
}

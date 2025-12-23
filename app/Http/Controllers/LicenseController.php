<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function index()
    {
        // Latest license first
        $licenses = License::orderBy('license_id', 'desc')->paginate(10);

        return view('license', compact('licenses'));
    }

    // OPTIONAL: delete action (future use)
    public function destroy($id)
    {
        License::where('license_id', $id)->delete();

        return redirect()
            ->route('masters.license')
            ->with('success', 'License deleted successfully');
    }
}

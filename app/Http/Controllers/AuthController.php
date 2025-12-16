<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }


//     public function loginPost(Request $request)
// {
//     dd(
//         $request->username,
//         \App\Models\User::where('username', $request->username)->first()
//     );
// }
    public function loginPost(Request $request)
    {
        \Log::info('Login attempt', $request->only('username'));
        
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            \Log::info('Login successful', ['user_id' => Auth::id()]);
            return redirect()->intended('/dashboard')->with('success', 'Login successful! Welcome to your dashboard.');
        }

        \Log::warning('Login failed for user: ' . $request->username);
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('username', 'remember'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'password' => 'required|confirmed|min:6',
    ]);

    if (!Hash::check($request->current_password, auth()->user()->password)) {
        return back()->withErrors(['current_password' => 'Current password incorrect']);
    }

    auth()->user()->update([
        'password' => Hash::make($request->password),
    ]);

    return redirect('/dashboard')->with('success', 'Password changed successfully');
}
}

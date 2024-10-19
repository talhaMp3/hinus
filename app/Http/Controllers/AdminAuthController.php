<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the login form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in with the remember functionality
        if (Auth::guard('admin')->attempt(
            ['email' => $request->email, 'password' => $request->password],
            $request->has('remember') // Remember me functionality
        )) {
            // Redirect to intended admin page after login
            return redirect()->intended(route('admin.dashboard'));
        }

        // Failed login attempt
        return back()->withErrors(['email' => 'Login failed.']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function showLoginForm()
    {
        return view('admin.auth.login'); 
    }
}

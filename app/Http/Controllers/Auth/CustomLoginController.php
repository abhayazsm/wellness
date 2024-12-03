<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomLoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('auth.login'); // Create this view file for the login form
    }

    // Handle login submission
    public function login(Request $request)
    {
        // Validate input
        $this->validateLogin($request);

        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to dashboard or home
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, redirect back with error
        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    // Validation rules
    protected function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // Show the login page
    public function showLoginForm()
    {
        return view('login'); // Pointing to index.blade.php
    }

    public function login(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'email' => 'required|string', // Ensure the username field is a string
        'password' => 'required|string|min:3', // Password field must be at least 3 characters
    ]);

    // Get the credentials from the form
    $credentials = $request->only('email', 'password');

    // Attempt to authenticate the user
    if (Auth::attempt($credentials, $request->filled('remember'))) {
        // Authentication passed, redirect to the dashboard or intended route
        return redirect()->intended('/dashboard');
    }

    // Authentication failed, return back with error message
    return back()->withErrors([
        'login' => 'The provided credentials do not match our records.',
    ]);
}

     // Show the registration form
     public function showRegistrationForm()
     {
         return view('auth.register'); // Show the registration view
     }
 
     // Handle the registration logic
     public function register(Request $request)
     {
         // Validate the form input
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:5|confirmed',
         ]);
 
         // Create the new user
         $user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password),
         ]);
 
         // Log the user in
         Auth::login($user);
 
         // Redirect to the dashboard or intended page
         return redirect()->intended('/dashboard');
     }
}


<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthCont extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            // Added 'ends_with:@cca.edu.ph' to the email rules
            'email' => 'required|string|email|max:255|unique:users|ends_with:@cca.edu.ph',
            'password' => 'required|string|min:8|confirmed',
        ], [
            // Custom error message for email domain validation
            'email.ends_with' => 'You must use a valid @cca.edu.ph school email address.',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Return to home with success message
        return redirect('/')->with('success', 'Registration successful! You can now log in.');
    }   
}
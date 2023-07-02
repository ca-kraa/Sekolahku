<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/user/dashboard');
        }
    }

    return redirect('/login')->with('error', 'Login failed. Please check your credentials.');
}
}

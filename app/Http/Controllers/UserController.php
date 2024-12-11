<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('signin');
    }

    public function signin(Request $request)
    {
        $data = $request->all();

        if (isset($data['email']) && isset($data['password'])) {
            session()->put('user', ['email' => $data['email'], 'password' => $data['password'], 'is_login' => true]);
            return redirect('/profile')->with('success', 'Login Successful!');
        }

        return redirect('/signin')->with('error', 'Login failed!');
    }

    public function showRegisterForm()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $data = $request->all(); 
        session()->put('user', ['email' => $data['email'], 'password' => $data['password'], 'is_login' => true]);
        return redirect('/signin')->with('success', 'Registration Successful!');
    }
}

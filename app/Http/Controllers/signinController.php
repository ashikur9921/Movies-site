<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SigninController extends Controller
{
    public function showForm()
    {
        return view('pages.signin');  
    }
    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('upload');
        }

        return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

}
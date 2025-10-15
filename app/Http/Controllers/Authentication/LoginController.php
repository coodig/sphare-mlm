<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function login(Request $request)
    {
        $credentials  = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard', ['username' => Auth::user()->username])->with('success', 'Welcome in SPHARE MLM,' . Auth::user()->username . '!');
        }

        return back()->withErrors([
            'email' => 'Invalid Email',
            'password' => 'Invalid Password',
        ]);
    }
    public function show()
    {

        return view('authentication.login');
    }
}

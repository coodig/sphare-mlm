<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'string|max:255|unique:users,username',
            'email' => 'email|string|unique:users,email',
            'password' => 'string|confirmed',
            'sponsor_id' => 'string|nullable'
        ]);

        $user = User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'sponsor_id' => $validated['sponsor_id'] ?? null,
        ]);

        Auth::login($user);

        //  dd($user);
        return redirect()->route('dashboard', ['username' => $user->username])->with('success', 'Welcome in SPHARE MLM,' . $user->username . '!');
    }
    public function show()
    {
        return view('authentication.register');
    }
}

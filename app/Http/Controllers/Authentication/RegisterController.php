<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\GenealogyTree;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'string|max:255|unique:users,username',
            'email' => 'email|string|unique:users,email',
            'password' => 'string|confirmed',
            // 'sponsor_id' => 'string|nullable',
            // 'referral_code'=>'string|unique:users,referral_code',
        ]);

        $referral_code = Str::random(10);


        if (isset($request->referral_code)) {

            $user = User::where('referral_code', $request->referral_code)->get();

            if (count($user) > 0) {
                  $user_id = User::create([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'referral_code' => $referral_code,
            ]);

            GenealogyTree::insert([
                'referral_code' => $request->referrer_id,
                'user_id'=>$user_id,
                'sponsor_id'=>$user[0]['id'],
            ]);
            }
        } else {
            $user = User::create([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'referral_code' => $referral_code,
            ]);
        }
        // 'sponsor_id' => $validated['sponsor_id'] ?? null,
        // 'referral_code' => $validated['referral_code'] ?? null,

        // Auth::login($user);

        //  dd($user);
        return redirect()->route('login', ['username' => $user->username])->with('success', 'Account created successfully 🎉 Now log in and start your journey!');
    }
    public function show()
    {
        return view('authentication.register');
    }
}

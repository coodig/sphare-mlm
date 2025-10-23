<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('email',$googleUser->getEmail())->first();

        if($user){
            if(empty($user->google_id)){

            }
        }

    }
}

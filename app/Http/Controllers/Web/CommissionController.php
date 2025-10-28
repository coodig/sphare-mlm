<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommissionController extends Controller
{
    public function show($username){
        $user = Auth::user();

        if(!$user || $user->username  !== $username){
            abort(403,'Unautherized Access');
        }
        return view('web.commission.index',compact('user'));
    }
}

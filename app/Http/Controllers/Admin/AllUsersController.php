<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllUsersController extends Controller
{
    public function allUsers($username){

        $user = Auth::user();
        $allUsers = User::all();
        dd($allUsers);
        // return view('admin.all-users',compact('allUsers'));
    }
}

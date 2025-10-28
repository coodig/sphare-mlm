<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenealogyTreeController extends Controller
{
    public function show($username){
        $user = Auth::user();

        if(!$user || $user->username !== $username){
            abort(403,'Unauthorized User');
        }

        return view('web.genealogy-tree.index',compact('user'));
    }
}

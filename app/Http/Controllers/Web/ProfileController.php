<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($username)
    {
        $user = Auth::user();

        if (!$user || $user->username !== $username) {
            abort(403, 'Unauthorized access');
        }
        return view('web.profile.profile', compact('user'));
    }

    public function edit($username) {}

    public function update(Request $request, $username) {}
}

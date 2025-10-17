<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    public function show(){
        return view('web.pages.terms-and-condition');
    }
}

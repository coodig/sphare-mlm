<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQsController extends Controller
{
    public function show(){
        return view('web.pages.faqs');
    }
}

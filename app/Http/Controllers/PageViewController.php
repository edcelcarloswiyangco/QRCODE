<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageViewController extends Controller
{
    
    public function registerView()
    {
        return view('homeRegister');
    }

    public function loginView()
    {
        return view('/HomeLogin');
    }

    
}

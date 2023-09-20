<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        
        $name = "Oakar Phyo";
        return view('pages.home',compact('name'));
    }
    public function dashboard()
    {
        
        
        return view('pages.dashboard');
    }
    public function about()
    {
        
        
        return view('pages.about');
    }


}

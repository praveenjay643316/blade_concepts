<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('projects.home',['name' => 'Expert solution']);
    }
    public function about()
    {
        return view('projects.about');
    }
    public function contact()
    {
        return view('projects.contact');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewHome()
    {
        return view('home');
    }

    public function viewAbout()
    {
        return view('about');
    }

    public function viewBlog()
    {
        return view('blog');
    }

    public function viewContact()
    {
        return view('contact');
    }

}

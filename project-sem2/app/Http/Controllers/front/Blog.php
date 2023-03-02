<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blog extends Controller
{
    //
    public function index(){
        return view('front.blog.index');
    }
    public function blog_details(){
        return view('front.blog.blog_details');
    }
}


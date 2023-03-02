<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Faq extends Controller
{
    //
    public function indexFaq()
    {
        return view('front.faq.index');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contact extends Controller
{
    //
    public function indexContact(){
        return view('front.contact.index');
    }
}

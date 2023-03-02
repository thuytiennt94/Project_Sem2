<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class Home extends Controller
{
    //
    public function index(){
        $productMedicines = Product::where('featured', true)->get();
        $arrivalProducts = Product::where('featured', true)->limit(3)->get();

        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();

        return view('front.index', compact('productMedicines', 'blogs','arrivalProducts'));
    }
}

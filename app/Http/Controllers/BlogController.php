<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        // print_r(111111111); exit;
        return view('frontend/blogs');
    }

    function blogDetail(){
        return view('frontend/blog_detail');
    }
}

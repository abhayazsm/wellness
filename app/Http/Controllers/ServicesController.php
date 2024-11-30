<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function index(){
        // print_r(111111111); exit;
        return view('frontend/services');
    }
}

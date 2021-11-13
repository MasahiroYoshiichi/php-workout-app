<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    
    public function top()
    {
        return view('home.top');
    }
    
    public function login()
    {
        return view('home.login');
    }
    
    public function register()
    {
        return view('home.register');
    }
    
    public function introduction()
    {
        return view('home.introduction');
    }
}

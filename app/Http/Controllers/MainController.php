<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //
    public function selection()
    {
        return view('main.selection');
    }
    
    public function information()
    {
        return view('main.information');
    }
}

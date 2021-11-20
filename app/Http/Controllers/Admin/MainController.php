<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //
    public function create()
    {
        return view('admin.event');
    }
    
    public function index()
    {
        return view('admin.index');
    }
    
    public function edit()
    {
        return view('admin.edit');
    }
}

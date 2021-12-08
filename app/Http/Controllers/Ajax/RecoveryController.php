<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecoveryController extends Controller
{
    //
    public function morning()
    {
        return view('main.sample2');
    }
    public function noon()
    {
        return view('main.noon');
    }
}

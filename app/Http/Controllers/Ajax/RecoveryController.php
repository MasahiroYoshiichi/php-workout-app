<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Training;
class MenuController extends Controller
{
    //
    public function morning()
    {
        return view('main.sample2');
    }
    public function chest()
    {
         $movie = Training::where('training_point_id', '1')->get();
        
        return view('video.chest',['movie' => $movie]);
    }
}

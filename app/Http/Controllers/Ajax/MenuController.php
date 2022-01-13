<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Training;

class MenuController extends Controller
{
    public function chest()
    {
        $movie = Training::where('training_point_id', '1')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function back()
    {
        $movie = Training::where('training_point_id', '2')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function sholuder()
    {
        $movie = Training::where('training_point_id', '3')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function bicelder()
    {
        $movie = Training::where('training_point_id', '4')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function triceps()
    {
        $movie = Training::where('training_point_id', '5')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function leg()
    {
        $movie = Training::where('training_point_id', '6')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function hip()
    {
        $movie = Training::where('training_point_id', '7')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function body()
    {
        $movie = Training::where('training_point_id', '8')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function ath()
    {
        $movie = Training::where('course_id', '1')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function exe()
    {
        $movie = Training::where('course_id', '2')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
    public function fit()
    {
        $movie = Training::where('course_id', '3')->get();
        
        return view('main.training_menu',['movie' => $movie]);
    }
    
}

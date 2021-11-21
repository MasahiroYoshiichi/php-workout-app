<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workout;

class TopController extends Controller
{
    //
    public function top()
    {
        return view('home.top');
    }
    
    public function app_login()
    {
        return view('home.app_login');
    }
    
    public function app_add(Request $request)
    {
        $this->validate($request, Workout::$rules);
        
        $user = new Workout;
        $form = $request->all();
        $user->fill($form)->save();
        
        return redirect('information');
        
    }
    
    public function app_register()
    {
        return view('home.app_register');
    }
    
    public function event() 
    {
        return view('home.event');
    }
    
    public function introduction()
    {
        return view('home.introduction');
    }
    
    public function community()
    {
        return view('home.community');
    }
}

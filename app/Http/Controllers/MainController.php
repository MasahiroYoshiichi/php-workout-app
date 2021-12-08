<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use Carbon\Carbon;

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
    
    public function profile_create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();

        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $profile->image_path = basename($path);
        } else {
            $profile->image_path = null;
        }
            
        unset($form['_token']);
        unset($form['image']);
        
        $profile->fill($form)->save();
        
        return redirect('selection');
        
        
        
        $profile->fill($form)->save();
    }
    
    
    
    public function menu()
    {
        return view('main.menu');
    }
    
    public function recovery()
    {
        return view('main.recovery');
    }
    
    public function post()
    {
        return view('main.post');
    }
    
    public function management()
    {
        return view('main.management');
    }
    
    public function athlete()
    {
        
        
        return view('main.athlete');
    }
    
    public function exercise()
    {
        return view('main.exercise');
    }
    
    public function fitness()
    {
        return view('main.fitness');
    }
}

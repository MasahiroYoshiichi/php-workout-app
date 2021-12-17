<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use App\Training;
use App\TrainingHistory;
use Auth;

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
        $this->validate($request, User::$rules);
        
        $user = Auth::user();
        $form = $request->all();

        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $user->image_path = basename($path);
        } else {
            $user->image_path = null;
        }
            
        unset($form['_token']);
        unset($form['image']);
        
        $user->fill($form)->update();
       
        
        return redirect('selection');
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
     
     if (Auth::id() === TrainingHistory::where('user_id')) {
         $movie = Training::find(2);
     } else {
         $movie = Training::find([1,2,3,4,5,6,]);
     }
     
     $user = Auth::id();
     
     return view('main.athlete',['movie' => $movie,'user' => $user]);
    } 
    public function exercise()
    {
        return view('main.exercise');
    }
    
    public function fitness()
    {
        return view('main.fitness');
    }
    
   public function training_register(Request $request)
    {
        $this->validate($request, TrainingHistory::$rules);
        $training_history = new TrainingHistory();
        $form = $request->all();
        $training_history->fill($form)->save();
        
        return redirect('selection');
    }
    
    
}




 //
      // 
      // 
      // 
      // 
      // //
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use App\Training;
use App\TrainingHistory;
use Illuminate\Support\Facades\DB;
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
     $user = Auth::user();
     $training_history = $user->training_histories->sortByDesc('created_at')->first()->training_id??''; 
     if(!count($user->training_histories)) { 
         $movie = Training::find([1,2,3,71,72,73]);
     } else if($training_history === 73) {
        $movie = Training::find([19,20,21,55,56,57]);         
     } else if($training_history === 57) {
        $movie = Training::find([103,104,105,119,120,121]);
     } else if($training_history === 121 ) {
        $movie = Training::find([4,5,25,26,39,40]);   
     } else if($training_history === 40 ) {
        $movie = Training::find([87,88,89,122,124,141,123]);   
     } else if($training_history === 123) {
        $movie = Training::find([4,6,7,25,23,24]);   
     } else if($training_history === 24 ) {
        $movie = Training::find([58,59,60,74,75,76]);   
     } else if($training_history === 76 ) {
        $movie = Training::find([106,107,108,90,91,92]);   
     } else if($training_history === 92  ) {
        $movie = Training::find([41,42,43,124,125,126]);   
     } else if($training_history === 126 ) {
        $movie = Training::find([5,8,27,28,127,128]);   
     } else if($training_history === 128  ) {
        $movie = Training::find([1,3,7,39,40,42]);   
     } else if($training_history ===42  ) {
        $movie = Training::find([19,26,21,44,41,43]);   
     } else if($training_history === 43   ) {
        $movie = Training::find([72,76,73,127,120,119]);   
     } else if($training_history === 119  ) {
        $movie = Training::find([58,55,56,126,122,123]);   
     } else if($training_history === 123  ) {
        $movie = Training::find([89,90,91,107,104,105]);   
     } else if($training_history === 105  ) {
        $movie = Training::find([4,6,2,22,27,25]);   
     } else if($training_history === 25  ) {
        $movie = Training::find([39,42,40,121,141,128]);   
     } else if($training_history === 128  ) {
        $movie = Training::find([56,59,57,71,75,76]);   
     } else if($training_history === 76 ) {
        $movie = Training::find([5,8,3,88,92,87]);   
     } else if($training_history === 87 ) {
        $movie = Training::find([20,28,24,103,106,108]);   
     } else  {
        $movie = Training::find([1,2,3,71,72,73]);
     }
    $training_history_date = $user->training_histories->sortByDesc('created_at')->first();
    return view('main.athlete',['movie' => $movie,'user' => $user,'training_history_date' => $training_history_date, 'training_history' => $training_history]);
    } 
    
    public function exercise()
    {
     $user = Auth::user();
     $training_history = $user->training_histories->sortByDesc('created_at')->first()->training_id??''; 
     if(count($user->training_histories)) { 
         $movie = Training::find([10,11,12,13,14]);
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else {
        $movie = Training::find([]);  
     }
    
    $training_history_date = $user->training_histories->sortByDesc('created_at')->first();
    $training_history_point = $user->training_histories->sortByDesc('created_at')->first();

     
    return view('main.athlete',['movie' => $movie,'user' => $user,'training_history_date' => $training_history_date, 'training_history' => $training_history]);     
    }
    
    public function fitness()
    {
     $user = Auth::user();
     $training_history = $user->training_histories->sortByDesc('created_at')->first()->training_id??''; 
      if(count($user->training_histories)) { 
         $movie = Training::find([10,11,12,13,14]);
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else if($training_history ===  ) {
        $movie = Training::find([]);   
     } else {
        $movie = Training::find([]);  
     }
     
    $training_history_date = $user->training_histories->sortByDesc('created_at')->first();
    $training_history_point = $user->training_histories->sortByDesc('created_at')->first();

     
    return view('main.athlete',['movie' => $movie,'user' => $user,'training_history_date' => $training_history_date, 'training_history' => $training_history]);     
    }
    
   public function training_register(Request $request)
    {
        $this->validate($request, TrainingHistory::$rules);
        
        for($i=0; $i < count($request->training_id); $i++) {
            $history = new TrainingHistory;
            $history->user_id = $request->user_id;
            $history->training_id = $request->training_id[$i];
            $history->training_point_id = $request->training_point_id[$i];
            $history->course_id = $request->course_id[$i];
            $history->user_weight = $request->user_weight;
            $history->user_fat = $request->user_fat;
            $history->save();
        }
        return redirect('selection');
    }
    
    
}
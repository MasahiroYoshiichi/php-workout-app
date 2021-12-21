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
     $training_history = $user->training_histories->max('id');

     if($training_history === 1 ) {
        $movie = Training::find([19,20,21,55,56,57]);         
     } else if($training_history === 19) {
        $movie = Training::find([103,104,105,119,120,121]);
     } else if($training_history === 121 ) {
        $movie = Training::find([4,5,25,26,39,40]);   
     } else if($training_history === 40 ) {
        $movie = Training::find([87,88,89,122,124,141,123]);   
     } else if($training_history === 141) {
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
     $training_history = $user->training_histories->sortByDesc('created_at')->first()->training_id; 
     if($training_history === '') { 
         $movie = Training::find([9,10,11,77,78,79]);
     } else if($training_history === 79 ) {
        $movie = Training::find([29,30,31,61,62,63]);   
     } else if($training_history === 63  ) {
        $movie = Training::find([109,110,111,45,46,47]);   
     } else if($training_history === 47 ) {
        $movie = Training::find([93,94,95,130,131,132]);   
     } else if($training_history === 132 ) {
        $movie = Training::find([12,13,14,32,33,34]);   
     } else if($training_history === 34 ) {
        $movie = Training::find([64,65,66,80,81,82]);   
     } else if($training_history === 82 ) {
        $movie = Training::find([48,49,50,132,133,134]);   
     } else if($training_history === 134 ) {
        $movie = Training::find([96,97,98,112,113,114]);   
     } else if($training_history === 114 ) {
        $movie = Training::find([9,13,46,47,113,115]);   
     } else if($training_history === 115 ) {
        $movie = Training::find([29,32,45,48,95,96]);   
     } else if($training_history === 96 ) {
        $movie = Training::find([80,78,81,130,131,133,]);   
     } else if($training_history === 133 ) {
        $movie = Training::find([51,64,62,134,132,129]);   
     } else if($training_history === 129 ) {
        $movie = Training::find([12,11,14,30,34,32]);   
     } else if($training_history === 32 ) {
        $movie = Training::find([50,46,47,131,132,129]);   
     } else if($training_history === 129 ) {
        $movie = Training::find([65,63,66,93,94,97]);   
     } else if($training_history === 97 ) {
        $movie = Training::find([82,80,79,114,112,111]);   
     } else {
        $movie = Training::find([9,10,11,77,78,79]);  
     }
    
    $training_history_date = $user->training_histories->sortByDesc('created_at')->first();
    $training_history_point = $user->training_histories->sortByDesc('created_at')->first();

     
    return view('main.athlete',['movie' => $movie,'user' => $user,'training_history_date' => $training_history_date, 'training_history' => $training_history]);     
    }
    
    public function fitness()
    {
     $user = Auth::user();
     $training_history = $user->training_histories->sortByDesc('created_at')->first()->training_id??''; 
      if($training_history === '') { 
         $movie = Training::find([15,16,142,83,84,146]);
     } else if($training_history === 146 ) {
        $movie = Training::find([35.36,143,67,68,145]);   
     } else if($training_history === 145 ) {
        $movie = Training::find([115,116,147,51,52,144]);   
     } else if($training_history === 144 ) {
        $movie = Training::find([99,100,147,135,136,137]);   
     } else if($training_history === 137 ) {
        $movie = Training::find([17,18,149,37,38,150]);   
     } else if($training_history === 150 ) {
        $movie = Training::find([69,70,152,85,86,153]);   
     } else if($training_history === 153 ) {
        $movie = Training::find([53,54,151,138,140,141]);   
     } else if($training_history === 141 ) {
        $movie = Training::find([101,102,154,117,118.155]);   
     } else if($training_history === 155 ) {
        $movie = Training::find([15,18,142,99,101,147]);   
     } else if($training_history === 147 ) {
        $movie = Training::find([35,37,150,115,116,148]);   
     } else if($training_history === 148 ) {
        $movie = Training::find([67,69,145,139,136,135]);   
     } else if($training_history === 135 ) {
        $movie = Training::find([83,86,146,54,51,151]);   
     } else if($training_history === 151 ) {
        $movie = Training::find([16,17,149,36,38,143]);   
     } else if($training_history === 143 ) {
        $movie = Training::find([85,84,153,68,70,152,]);   
     } else if($training_history === 152 ) {
        $movie = Training::find([53,52,144,138,137,140]);   
     } else if($training_history === 140 ) {
        $movie = Training::find([116,117,155,102,100,154]);   
     } else {
        $movie = Training::find([15,16,142,83,84,146]);  
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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use App\Training;
use App\TrainingPoint;
use App\TrainingHistory;
use App\TrainingSet;
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
        $user = Auth::user();
        $history = $user->training_histories;
        
        $chest = $history->where('training_point_id', 1)->count();
        $back = $history->where('training_point_id', 2)->count();
        $sholuder = $history->where('training_point_id', 3)->count();
        $bicelder = $history->where('training_point_id', 4)->count();
        $triceps = $history->where('training_point_id', 5)->count();
        $leg = $history->where('training_point_id', 6)->count();
        $hip = $history->where('training_point_id', 7)->count();
        $body = $history->where('training_point_id', 8)->count();
        
        if ($user->bodyType = 1){
            $user->bodyType = "痩せ型体型";
        } elseif($user->bodyType = 2) {
            $user->bodyType = "筋肉質体型";
        } else {
            $user->bodyType = "肥満型体型";
        }
        
        if (isset($history)) {
            $user->weight = $history->sortByDesc('created_at')->first()->user_weight;
            $user->fat = $history->sortByDesc('created_at')->first()->user_fat;
        }
        
        $height = $user->height;
        $weight = $user->weight;
        $bmi = round($weight/($height*$height)*100);
        $days_in_month = Carbon::now()->daysInMonth;
        
        return view('main.management',['user' => $user, 'bmi' => $bmi, 'chest' => $chest, 'back' => $back, 'sholuder' => $sholuder, 'bicelder' => $bicelder,'triceps' => $triceps, 'leg' => $leg, 'hip' => $hip, 'body' => $body
        ,'days_in_month' => $days_in_month] );
    }
    
    public function athlete()
    {
     $user = Auth::user();
     $training_history = $user->training_histories->where('course_id', 1)->max();
     if(!isset($training_history)) {
         $training_sets = Training::find(explode("_", TrainingSet::find(1)->next_show_trainings));
         
     } else {
     $next_trainings = TrainingSet::where('training_id', $training_history->training_id)->first();
     $training_sets = Training::find(explode("_", $next_trainings));
     }
     $history_date = $user->training_histories->max();
     $history_points = $user->training_histories->sortByDesc('created_at')->pluck('training_point_id')->take(6)->unique();
     $history_point_names = TrainingPoint::find($history_points);
     $before = $user->training_histories->where('course_id', 1)->sortByDesc('id')->pluck('training_id')->take(6);
     $before_trainings = Training::find($before);
     $today = Carbon::today()->format('Y-m-d'); 
     if(!isset($training_history)){
         $history_time = $training_history->created_at??'';
         $history_sub_time = $history_date->created_at??'';
     } else {
         $history_time = $training_history->created_at->format('Y-m-d');
         $history_sub_time = $history_date->created_at->format('Y-m-d');
        
     }
     return view('main.athlete',['user' => $user, 'training_history' => $training_history, 'history_date' => $history_date, 'training_sets' => $training_sets, 
     'history_point_names' => $history_point_names, 'today' => $today, 'history_time' => $history_time, 'history_sub_time' =>  $history_sub_time, 'before_trainings' => $before_trainings]);
    } 
    
     public function exercise()
    {
     $user = Auth::user();
     $training_history = $user->training_histories->where('course_id', 2)->max();
     if(!isset($training_history)) {
         $training_sets = Training::find(explode("_", TrainingSet::find(21)->next_show_trainings));
         
     } else {
     $next_trainings = TrainingSet::where('training_id', $training_history->training_id)->first();
     $training_sets = Training::find(explode("_", $next_trainings));
     }
     $history_date = $user->training_histories->max();
     $history_points = $user->training_histories->sortByDesc('created_at')->pluck('training_point_id')->take(6)->unique();
     $history_point_names = TrainingPoint::find($history_points);
     $before = $user->training_histories->where('course_id', 2)->sortByDesc('id')->pluck('training_id')->take(6);
     $before_trainings = Training::find($before);
     $today = Carbon::today()->format('Y-m-d'); 
     if(!isset($training_history)){
         $history_time = $training_history->created_at??'';
         $history_sub_time = $history_date->created_at??'';
     } else {
         $history_time = $training_history->created_at->format('Y-m-d');
         $history_sub_time = $history_date->created_at->format('Y-m-d');
         
     }
     return view('main.exercise',['user' => $user, 'training_history' => $training_history, 'history_date' => $history_date, 'training_sets' => $training_sets, 
     'history_point_names' => $history_point_names, 'today' => $today, 'history_time' => $history_time, 'history_sub_time' =>  $history_sub_time, 'before_trainings' => $before_trainings]);
    } 
    
     public function fitness()
    {
     $user = Auth::user();
     $training_history = $user->training_histories->where('course_id', 3)->max();
     if(!isset($training_history)) {
         $training_sets = Training::find(explode("_", TrainingSet::find(37)->next_show_trainings));
         
     } else {
     $next_trainings = TrainingSet::where('training_id', $training_history->training_id)->first();
     $training_sets = Training::find(explode("_", $next_trainings));
     }
     $history_date = $user->training_histories->max();
     $history_points = $user->training_histories->sortByDesc('created_at')->pluck('training_point_id')->take(6)->unique();
     $history_point_names = TrainingPoint::find($history_points);
     $before = $user->training_histories->where('course_id', 3)->sortByDesc('id')->pluck('training_id')->take(6);
     $before_trainings = Training::find($before);
     $today = Carbon::today()->format('Y-m-d'); 
     if(!isset($training_history)){
         $history_time = $training_history->created_at??'';
         $history_sub_time = $history_date->created_at??'';
     } else {
         $history_time = $training_history->created_at->format('Y-m-d');
         $history_sub_time = $history_date->created_at->format('Y-m-d');
       
     }
     return view('main.fitness',['user' => $user, 'training_history' => $training_history, 'history_date' => $history_date, 'training_sets' => $training_sets, 
     'history_point_names' => $history_point_names, 'today' => $today, 'history_time' => $history_time, 'history_sub_time' =>  $history_sub_time, 'before_trainings' => $before_trainings]);
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
            $history->training_date = Carbon::today()->format('Y-m-j');
            $history->save();
        }
        return redirect('selection');
    }
    
     public function various_training_register(Request $request)
    {
        for($i=0; $i < count($request->training_id); $i++) {
            $history = new TrainingHistory;
            $history->user_id = $request->user_id;
            $history->training_id = $request->training_id[$i];
            $history->training_point_id = $request->training_point_id[$i];
            $history->course_id = $request->course_id[$i];
            $history->training_date = Carbon::today()->format('Y-m-j');
            $history->save();
        }
        return redirect('selection');
    }
    
}
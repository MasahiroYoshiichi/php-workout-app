<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Course;
use App\TrainingPoint;
use App\TrainingHistory;

class CarenderController extends Controller
{
    public function day_test(Request $request)
    {
       $day = $request->day;
       $training_courses = Course::find(Auth::user()->training_histories->where('training_date', $day)->pluck('course_id')->unique());
       $training_names = Auth::user()->training_histories->where('training_date', $day);
       $training_date = Auth::user()->training_histories->where('training_date', $day)->first();
       $training_parts = TrainingPoint::find(Auth::user()->training_histories->where('training_date', $day)->pluck('training_point_id')->unique());
       $training_time = Auth::user()->training_histories->where('training_date', $day)->max();
       return view('main.training_record',['training_courses' => $training_courses,'training_names' => $training_names, 'training_parts' => $training_parts,'training_time' => $training_time, 'training_date' => $training_date]);
        
    }
}

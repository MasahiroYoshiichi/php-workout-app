<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\TrainingHistory;
use Auth;
class ManagementController extends Controller
{
    public function chest()
    {
        $history = Auth::user()->training_histories;
        $point = $history->where('training_point_id', 1)->count();
        $all = $history->where('training_point_id')->count();
        $ratio = round($point/$all*100);
        $athlete = $history->where('course_id', 1)->where('training_point_id', 1)->count();
        $exercise = $history->where('course_id', 2)->where('training_point_id', 1)->count();
        $fitness = $history->where('course_id', 3)->where('training_point_id', 1)->count();
        $athlete_ratio = round($athlete/$point*100);
        $exercise_ratio = round($exercise/$point*100);
        $fitness_ratio = round($fitness/$point*100);
        return view('management.chest', ['point' => $point, 'ratio' => $ratio, 'athlete' => $athlete, 'exercise' => $exercise, 'fitness' => $fitness, 
        'athlete_ratio' => $athlete_ratio, 'exercise_ratio' => $exercise_ratio, 'fitness_ratio' => $fitness_ratio]);
    }
     public function back()
     {
       $history = Auth::user()->training_histories;
        $point = $history->where('training_point_id', 2)->count();
        $all = $history->where('training_point_id')->count();
        $ratio = round($point/$all*100);
        $athlete = $history->where('course_id', 1)->where('training_point_id', 2)->count();
        $exercise = $history->where('course_id', 2)->where('training_point_id', 2)->count();
        $fitness = $history->where('course_id', 3)->where('training_point_id', 2)->count();
        $athlete_ratio = round($athlete/$point*100);
        $exercise_ratio = round($exercise/$point*100);
        $fitness_ratio = round($fitness/$point*100);
        return view('management.back', ['point' => $point, 'ratio' => $ratio, 'athlete' => $athlete, 'exercise' => $exercise, 'fitness' => $fitness, 
        'athlete_ratio' => $athlete_ratio, 'exercise_ratio' => $exercise_ratio, 'fitness_ratio' => $fitness_ratio]);
    }
     public function sholuder()
     {
      $history = Auth::user()->training_histories;
        $point = $history->where('training_point_id', 3)->count();
        $all = $history->where('training_point_id')->count();
        $ratio = round($point/$all*100);
        $athlete = $history->where('course_id', 1)->where('training_point_id', 3)->count();
        $exercise = $history->where('course_id', 2)->where('training_point_id', 3)->count();
        $fitness = $history->where('course_id', 3)->where('training_point_id', 3)->count();
        $athlete_ratio = round($athlete/$point*100);
        $exercise_ratio = round($exercise/$point*100);
        $fitness_ratio = round($fitness/$point*100);
        return view('management.sholuder', ['point' => $point, 'ratio' => $ratio, 'athlete' => $athlete, 'exercise' => $exercise, 'fitness' => $fitness, 
        'athlete_ratio' => $athlete_ratio, 'exercise_ratio' => $exercise_ratio, 'fitness_ratio' => $fitness_ratio]);
    }
     public function bicelder()
     {
        $history = Auth::user()->training_histories;
        $point = $history->where('training_point_id', 4)->count();
        $all = $history->where('training_point_id')->count();
        $ratio = round($point/$all*100);
        $athlete = $history->where('course_id', 1)->where('training_point_id', 4)->count();
        $exercise = $history->where('course_id', 2)->where('training_point_id', 4)->count();
        $fitness = $history->where('course_id', 3)->where('training_point_id', 4)->count();
        $athlete_ratio = round($athlete/$point*100);
        $exercise_ratio = round($exercise/$point*100);
        $fitness_ratio = round($fitness/$point*100);
        return view('management.bicelder', ['point' => $point, 'ratio' => $ratio, 'athlete' => $athlete, 'exercise' => $exercise, 'fitness' => $fitness, 
        'athlete_ratio' => $athlete_ratio, 'exercise_ratio' => $exercise_ratio, 'fitness_ratio' => $fitness_ratio]);
    }
     public function triceps()
     {
       $history = Auth::user()->training_histories;
        $point = $history->where('training_point_id', 5)->count();
        $all = $history->where('training_point_id')->count();
        $ratio = round($point/$all*100);
        $athlete = $history->where('course_id', 1)->where('training_point_id', 5)->count();
        $exercise = $history->where('course_id', 2)->where('training_point_id', 5)->count();
        $fitness = $history->where('course_id', 3)->where('training_point_id', 5)->count();
        $athlete_ratio = round($athlete/$point*100);
        $exercise_ratio = round($exercise/$point*100);
        $fitness_ratio = round($fitness/$point*100);
        return view('management.triceps', ['point' => $point, 'ratio' => $ratio, 'athlete' => $athlete, 'exercise' => $exercise, 'fitness' => $fitness, 
        'athlete_ratio' => $athlete_ratio, 'exercise_ratio' => $exercise_ratio, 'fitness_ratio' => $fitness_ratio]);
    }
     public function leg()
     {
       $history = Auth::user()->training_histories;
        $point = $history->where('training_point_id', 6)->count();
        $all = $history->where('training_point_id')->count();
        $ratio = round($point/$all*100);
        $athlete = $history->where('course_id', 1)->where('training_point_id', 6)->count();
        $exercise = $history->where('course_id', 2)->where('training_point_id', 6)->count();
        $fitness = $history->where('course_id', 3)->where('training_point_id', 6)->count();
        $athlete_ratio = round($athlete/$point*100);
        $exercise_ratio = round($exercise/$point*100);
        $fitness_ratio = round($fitness/$point*100);
        return view('management.leg', ['point' => $point, 'ratio' => $ratio, 'athlete' => $athlete, 'exercise' => $exercise, 'fitness' => $fitness, 
        'athlete_ratio' => $athlete_ratio, 'exercise_ratio' => $exercise_ratio, 'fitness_ratio' => $fitness_ratio]);
    }
     public function hip()
     {
       $history = Auth::user()->training_histories;
        $point = $history->where('training_point_id', 7)->count();
        $all = $history->where('training_point_id')->count();
        $ratio = round($point/$all*100);
        $athlete = $history->where('course_id', 1)->where('training_point_id', 7)->count();
        $exercise = $history->where('course_id', 2)->where('training_point_id', 7)->count();
        $fitness = $history->where('course_id', 3)->where('training_point_id', 7)->count();
        $athlete_ratio = round($athlete/$point*100);
        $exercise_ratio = round($exercise/$point*100);
        $fitness_ratio = round($fitness/$point*100);
        return view('management.hip', ['point' => $point, 'ratio' => $ratio, 'athlete' => $athlete, 'exercise' => $exercise, 'fitness' => $fitness, 
        'athlete_ratio' => $athlete_ratio, 'exercise_ratio' => $exercise_ratio, 'fitness_ratio' => $fitness_ratio]);
    }
     public function body()
     {
       $history = Auth::user()->training_histories;
        $point = $history->where('training_point_id', 8)->count();
        $all = $history->where('training_point_id')->count();
        $ratio = round($point/$all*100);
        $athlete = $history->where('course_id', 1)->where('training_point_id', 8)->count();
        $exercise = $history->where('course_id', 2)->where('training_point_id', 8)->count();
        $fitness = $history->where('course_id', 3)->where('training_point_id', 8)->count();
        $athlete_ratio = round($athlete/$point*100);
        $exercise_ratio = round($exercise/$point*100);
        $fitness_ratio = round($fitness/$point*100);
        return view('management.body', ['point' => $point, 'ratio' => $ratio, 'athlete' => $athlete, 'exercise' => $exercise, 'fitness' => $fitness, 
        'athlete_ratio' => $athlete_ratio, 'exercise_ratio' => $exercise_ratio, 'fitness_ratio' => $fitness_ratio]);
    }
    
}

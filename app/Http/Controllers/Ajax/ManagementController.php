<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\TrainingHistory;
use Auth;
use Carbon\Carbon;
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
        $point = $history->where('training_point_id', 3)->count()??"";
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
    
    public function composition(Request $request)
    {
    $date = $request->day;
    $days_in_month = $date['days_in_manth'];
    $get_ym = $date['get_ym'];
    $get_ym_firstday = $get_ym .'-01';
    
    $next_days = Carbon::parse($get_ym)->addMonthNoOverflow()->daysInMonth;
    $next_date = Carbon::parse($get_ym)->addMonthNoOverflow()->format('Y-m');
    $prev_days = Carbon::parse($get_ym)->subMonthsNoOverflow()->daysInMonth;
    $prev_date = Carbon::parse($get_ym)->subMonthsNoOverflow()->format('Y-m');
    
    for($day = 1; $day <= $days_in_month; $day++) {
       if($day < 10) 
       {
         $get_days[] = $get_ym.'-0'.$day;
       } else {
         $get_days[] = $get_ym.'-'.$day;
       }
     }
     
     $history = Auth::user()->training_histories;
     $before_user_weight = $history->where('training_date', !null)->max('user_weight');
     $before_user_fat = $history->where('training_date', !null)->max('user_fat');
     foreach($get_days as $get_day)
     {
       $month_user_weight[] = $history->where('training_date', $get_day)->where('user_weight', !null)->pluck('user_weight')->first()??$before_user_weight;
       $month_user_fat[] = $history->where('training_date', $get_day)->where('user_fat', !null)->pluck('user_fat')->first()??$before_user_fat;
     }

   
     return view('main.composition',['get_ym' => $get_ym, '$get_ym_firstday' => $get_ym_firstday, 'next_days' => $next_days, 'next_date' => $next_date, 'prev_days' => $prev_days, 'prev_date' => $prev_date
     ,'month_user_weight' => $month_user_weight, 'month_user_fat' => $month_user_fat]);
    }
    
}

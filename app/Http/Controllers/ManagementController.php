<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\TrainingHistory;

class ManagementController extends Controller
{
     private $service;

    public function __construct(ManagementService $service)
    {
        $this->service = $service;
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
        ,'days_in_month' => $days_in_month, 'weeks' => Management::getWeeks(),'month' => Management::getMonth(),'prev' => Management::getPrev(),'next' => Management::getNext()] );
        
       
    }
}

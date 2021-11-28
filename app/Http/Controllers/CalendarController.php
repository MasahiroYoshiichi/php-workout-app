<?php

namespace App\Http\Controllers;

use App\Facades\Calendar;
use App\Services\CalendarService;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //
    private $service;
    
    public function __construct(CalendarService $service)
    {
        $this->service = $service;
    }
    
    public function record()
    {
        return view('main.record', [
             'weeks' => Calendar::getWeeks(),
             'month' => Calendar::getMonth(),
             'prev' => Calendar::getPrev(),
             'next' => Calendar::getNext(),
             ]);
    }
}


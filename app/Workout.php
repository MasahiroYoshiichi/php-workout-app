<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    //
    
    protected $guarded = array('id');
        
    public static $rules = array(
        'email' => 'email|required|unique:workout_users',
        'password' => 'required|min:4',
        );
}

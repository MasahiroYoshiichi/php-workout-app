<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // 
    protected $guarded = array('id');
    
    public static $rules = array(
        'firstName' => 'required',
        'lastName' => 'required',
        'rubyFirst' => 'required',
        'rubyLast' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'height' => 'required',
        'weight' => 'required',
        'bodyType' => 'required',
        'introduction' => 'required',
    );  
}

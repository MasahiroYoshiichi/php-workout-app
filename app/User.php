<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','accountName','age','gender','height','weight','fat','bodyType','introduction'
    ];
    
    
    public static $rules = array(
        'name' => 'required',
        'accountName' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'height' => 'required',
        'weight' => 'required',
        'bodyType' => 'required',
        'introduction' => 'required',
    );  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function training_histories()
    {
        return $this->hasMany('App\TrainingHistory');
    }
    
    
}

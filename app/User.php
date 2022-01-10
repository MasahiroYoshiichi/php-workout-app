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
        'name' => 'required|string|max:20|min:2',
        'accountName' => 'required|string|max:20',
        'age' => 'required|integer|max:120',
        'gender' => 'required',
        'height' => 'required|integer|max:250',
        'weight' => 'required|integer|max:300',
        'bodyType' => 'required',
        'introduction' => 'required|string|max:150',
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

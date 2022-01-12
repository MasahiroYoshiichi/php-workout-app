<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingHistory extends Model
{
    protected $fillable = [
        'user_id','training_id','course_id','training_point_id','user_weight','user_fat','training_date'
        ];
    
    public static $rules = array(
        'user_id' => 'required',
        'training_id' => 'required',
        'course_id' => 'required',
        'training_point_id' => 'required',
        'user_weight' => 'required|integer|max:150',
        'user_fat' => 'required|integer|max:50'
       );
        
        
    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function training()
    {
        return $this->belongsTo('App\Training');
    }
    
    public function training_point()
    {
        return $this->belongsTo('App\TrainingPoint');
    }
    
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function training_histories()
    {
        return $this->hasMany('App\TrainingHistory');
    }
}

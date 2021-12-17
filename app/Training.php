<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function training_histories()
    {
        return $this->hasMany('App\TrainingHIistory');
    }
}

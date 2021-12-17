<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingPoint extends Model
{
    public function toraining_histories()
    {
        return $this->hasMany('App\TrainingHistory');
    }
}

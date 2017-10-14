<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extype extends Model
{
    public function exams(){
        return $this->belongsToMany('App\Exam');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clss extends Model
{
    public function sections(){
        return $this->belongsToMany('App\Section');
    }

    public function exams(){
        return $this->belongsToMany('App\Exam');
    }

    public function subjects(){
        return $this->belongsToMany('App\Subject');
    }
}

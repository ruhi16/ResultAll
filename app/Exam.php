<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function extypes(){
        return $this->belongsToMany('App\Extype');
    }

    public function clsses(){
        return $this->belongsToMany('App\Clss');
    }
}

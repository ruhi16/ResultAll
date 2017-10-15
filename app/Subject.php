<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function clsses(){
        return $this->belongsToMany('App\Clss');
    }
}

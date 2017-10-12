<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clss extends Model
{
    public function sections(){
        return $this->belongsToMany('App\Section');
    }
}

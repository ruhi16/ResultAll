<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function clsses(){
        return $this->belongsToMany('App\Clss');
    }
}

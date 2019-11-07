<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function AddInfo(){
        return $this->hasMany('App\AddInfo');
    }
    
}

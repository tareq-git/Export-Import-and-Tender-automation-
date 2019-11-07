<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function CatalogueItem(){
        return $this->hasMany('App\CatalogueItem');
    }
    
}

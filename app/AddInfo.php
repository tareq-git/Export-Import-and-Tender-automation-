<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddInfo extends Model
{
    public function Buyer()
    {
        return $this->belongsTo('App\Buyer');
    }
}

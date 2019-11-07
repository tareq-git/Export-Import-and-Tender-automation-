<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    public function Proforma()
    {
        return $this->belongsTo('App\Proforma');
    }
}

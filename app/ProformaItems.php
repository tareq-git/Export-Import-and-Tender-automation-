<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProformaItems extends Model
{
    public function Proforma()
    {
        return $this->belongsTo('App\Proforma');
    }
}

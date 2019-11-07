<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogueItem extends Model
{
    public function Catalogue()
    {
        return $this->belongsTo('App\Catalogue');
    }
}

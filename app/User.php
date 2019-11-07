<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Shipper(){
       return $this->hasMany('App\Shipper');
   }

    public function SellerBank(){
        return $this->hasMany('App\SellerBank');
    }

    public function Seller(){
        return $this->hasMany('App\Seller');
    }

    public function Product(){
        return $this->hasMany('App\Product');
    }

    public function Cnf(){
        return $this->hasMany('App\Cnf');
    }

    public function BuyerBank(){
        return $this->hasMany('App\BuyerBank');
    }

    public function Buyer(){
        return $this->hasMany('App\Buyer');
    }


    public function Quotation(){
        return $this->hasMany('App\Quotation');
    }

    public function Proforma(){
        return $this->hasMany('App\Proforma');
    }

    public function Catalogue(){
        return $this->hasMany('App\Catalogue');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    protected $pago="pago";
    public function ventas(){
        return $this -> hasMany(venta::class);
    }
}

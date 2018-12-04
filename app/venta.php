<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $table='ventas';
    protected  $fillable=['total','fecha','id_pago','id_usuario','id_cupon'];

    public function pago(){
        return $this->belongsTo(pago::class,'id_pago');
    }
    public function usuario(){
        return $this->belongsTo(User::class,'id_usuario');
    }
    public function cupon(){
        return $this->belongsTo(cupon::class,'id_cupon');
    }
}

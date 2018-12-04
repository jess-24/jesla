<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_venta extends Model
{
    protected $table='detalle_ventas';
    protected  $fillable=['cantidad','id_producto','id_venta'];

    public function producto(){
        return $this->belongsTo(producto::class,'id_producto');
    }
    public function venta(){
        return $this->belongsTo(venta::class,'id_venta');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table='productos';
    protected  $fillable=['nombre','precio_compra','precio_venta','descripcion','tamano','color','imagen','id_categoria',
    'id_proveedor'];

    public function categoria(){
        return $this->belongsTo(categoria::class,'id_categoria');
    }
    public function proveedor(){
        return $this->belongsTo(proveedor::class,'id_proveedor');
    }
}

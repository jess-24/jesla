<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $proveedor='proveedores';
    protected $fillable=['nombre','direccion'];
}

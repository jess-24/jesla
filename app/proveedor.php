<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $proveedor='proveedor';
    protected $fillable=['nombre','direccion'];
}

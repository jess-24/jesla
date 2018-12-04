<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{

   protected $categoria="categoria";
   public function productos(){
       return $this -> hasMany(producto::class);
   }
}

<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //metodo de leer productos
    public function index(){
        //::all();  -> traerá todos los productos
        $productos= producto::paginate(10);//mostrar productos de 10 en 10
        return view('admin.productos.index')-> with(compact('productos'));
    }
    //metodo que permite ver el formulario de prorudcots
    public function create(){
        return view('admin.productos.create');
    }
    //metodo que registra el nuevo producto en la BD
    public function store(){

    }
}

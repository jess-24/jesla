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
    public function store(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $producto=new producto();
        $producto -> nombre= $request->input('nombre');
        $producto -> precio_compra= $request -> input('precio_compra');
        $producto -> precio_venta= $request -> input('precio_venta');
        $producto -> descripcion= $request -> input('descripcion');
        $producto -> tamano= $request -> input('tamano');
        $producto -> color= $request -> input('color');
        $producto -> cantidad= $request -> input('cantidad');
        $producto -> imagen= $request -> input('imagen');
        $producto -> id_categoria= $request -> input('id_categoria');
        $producto -> id_proveedor= $request -> input('id_proveedor');
        $producto -> save();//insert
        //redireccionar a listado de productos
        return redirect() -> route( 'producto.index');
    }
    public function edit($id){
        $producto=producto::find($id);
        return view('admin.productos.edit')-> with(compact('producto') );//pasa la var
    }                                                                        //producto a la vista
    //metodo que actualiza un producto en la BD
    public function update(Request $request,$id){
        $producto=producto::find($id);
        $producto -> nombre= $request->input('nombre');
        $producto -> precio_compra= $request -> input('precio_compra');
        $producto -> precio_venta= $request -> input('precio_venta');
        $producto -> descripcion= $request -> input('descripcion');
        $producto -> tamano= $request -> input('tamano');
        $producto -> color= $request -> input('color');
        $producto -> cantidad= $request -> input('cantidad');
        $producto -> imagen= $request -> input('imagen');
        $producto -> id_categoria= $request -> input('id_categoria');
        $producto -> id_proveedor= $request -> input('id_proveedor');
        $producto -> save();//update
        //redireccionar a listado de productos
        return redirect() -> route( 'producto.index');
    }
    public function destroy($id){
        $producto=producto::find($id);
        $producto -> delete();//elimina
        return redirect() -> route( 'producto.index');
        //return back();
    }
}

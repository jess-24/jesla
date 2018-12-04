<?php

namespace App\Http\Controllers;

use App\categoria;
use App\producto;
use App\detalle_venta;
use App\proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //metodo de leer productos
    public function index(){
        //::all();  -> traerá todos los productos
        $productos= producto::paginate(10);//mostrar productos de 10 en 10
        return view('admin.productos.index')-> with(compact('productos'));
    }
    public function listar($id){
        //::all();  -> traerá todos los productos
         $categoria= categoria::findOrFail($id);
         $productos=$categoria -> productos;
        return view('admin.ventas.index')-> with(compact('productos'));
    }
    public function agregar(Request $request,$id_p,$id_v){
        $detalle_venta=new detalle_venta();
        $detalle_venta -> cantidad= $request->input('cantidad');
        $detalle_venta -> id_producto=$id_p;
        $detalle_venta -> id_venta=$id_v;
        $detalle_venta -> save();
        return redirect() -> route( 'ventas.create');
    }
    //metodo que permite ver el formulario de prorudcots
    public function create(){
        $proveedores=proveedor::all();
        $categorias=categoria::all();
        return view('admin.productos.create')-> with(compact('proveedores','categorias'));
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
        $proveedores=proveedor::all();
        $categorias=categoria::all();
        return view('admin.productos.edit')-> with(compact('producto','proveedores','categorias') );//pasa la var
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

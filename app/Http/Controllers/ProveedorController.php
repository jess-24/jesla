<?php
namespace App\Http\Controllers;

use App\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        //::all();  -> traerá todos los productos
        $proveedores= proveedor::paginate(10);//mostrar productos de 10 en 10
        return view('admin.proveedores.index')-> with(compact('proveedores'));
    }
    public function create(){
        return view('admin.proveedores.create');
    }
    public function store(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $proveedor=new proveedor();
        $proveedor -> nombre= $request->input('nombre');
        $proveedor -> domicilio= $request -> input('domicilio');
        $proveedor -> save();//insert
        //redireccionar a listado de productos
        return redirect() -> route( 'proveedor.index');
    }
    public function edit($id){
        $proveedor=proveedor::find($id);
        return view('admin.proveedores.edit')-> with(compact('proveedor') );//pasa la var
    }
    public function update(Request $request,$id){
        $proveedor=proveedor::find($id);
        $proveedor -> nombre= $request->input('nombre');
        $proveedor -> domicilio= $request -> input('domicilio');
        $proveedor -> save();//update
        return redirect() -> route( 'proveedor.index');
    }
    public function destroy($id){
        $proveedor=proveedor::find($id);
        $proveedor -> delete();//elimina
        return redirect() -> route( 'proveedor.index');
        //return back();
    }

}

<?php

namespace App\Http\Controllers;
use App\cupon;
use Illuminate\Http\Request;

class CuponController extends Controller
{
    public function index(){
        //::all();  -> traerá todos los productos
        $cupons= cupon::paginate(10);//mostrar productos de 10 en 10
        return view('admin.cupones.index')-> with(compact('cupons'));
    }
    public function create(){
        return view('admin.cupones.create');
    }
    public function store(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $cupons=new cupon();
        $cupons -> codigo= $request->input('codigo');
        $cupons -> porcentaje= $request->input('porcentaje');
        $cupons -> vigencia= $request->input('vigencia');
        $cupons -> save();//insert
        //redireccionar a listado de productos
        return redirect() -> route( 'cupon.index');
    }
    public function edit($id){
        $cupon=cupon::find($id);
        return view('admin.cupones.edit')-> with(compact('cupon') );//pasa la var
    }
    public function update(Request $request,$id){
        $cupon=cupon::find($id);
        $cupon -> codigo= $request->input('codigo');
        $cupon -> porcentaje= $request->input('porcentaje');
        $cupon -> vigencia= $request->input('vigencia');
        $cupon -> save();//update
        return redirect() -> route( 'cupon.index');
    }
    public function destroy($id){
        $cupon=cupon::find($id);
        $cupon -> delete();//elimina
        return redirect() -> route( 'cupon.index');
        //return back();
    }
}

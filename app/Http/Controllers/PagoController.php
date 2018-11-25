<?php

namespace App\Http\Controllers;
use App\pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index(){
        //::all();  -> traerá todos los productos
        $pagos= pago::paginate(10);//mostrar productos de 10 en 10
        return view('admin.pagos.index')-> with(compact('pagos'));
    }
    public function create(){
        return view('admin.pagos.create');
    }
    public function store(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $pagos=new pago();
        $pagos -> tipo= $request->input('tipo');
        $pagos -> save();//insert
        //redireccionar a listado de productos
        return redirect() -> route( 'pago.index');
    }
    public function edit($id){
        $pago=pago::find($id);
        return view('admin.pagos.edit')-> with(compact('pago') );//pasa la var
    }
    public function update(Request $request,$id){
        $pago=pago::find($id);
        $pago -> tipo= $request->input('tipo');
        $pago -> save();//update
        return redirect() -> route( 'pago.index');
    }
    public function destroy($id){
        $pago=pago::find($id);
        $pago -> delete();//elimina
        return redirect() -> route( 'pago.index');
        //return back();
    }
}

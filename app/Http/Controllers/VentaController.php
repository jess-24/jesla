<?php

namespace App\Http\Controllers;

use App\cupon;
use App\pago;
use App\venta;
use App\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    //
    public function index(){
        $ventas= venta::paginate(10);//mostrar productos de 10 en 10
        return view('admin.ventas.index')-> with(compact('ventas'));
    }
    public function create(){
        $venta=new venta();
        $venta->fecha='1995-01-01';
        $venta -> total= 0;
        $venta -> id_pago= 1;
        $venta -> id_usuario= 1;
        $venta -> id_cupon= 2;
        $venta -> save();//insert
        $id=DB::table('ventas')->selectRaw('max(id)')->get();
        $cupones=cupon::all();
        $pagos=pago::all();
        $productos= producto::paginate(10);
        $id_venta=($id[0]->max);
        return view('admin.ventas.create')->with(compact('productos','id_venta','cupones','pagos'));
    }
    public function store(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $id=DB::table('ventas')->selectRaw('max(id)')->get();
        $id_venta=($id[0]->max);
        $subtotal=DB::table('detalle_ventas')
            ->join('productos','detalle_ventas.id_producto','=','productos.id')
            ->selectRaw('sum(detalle_ventas.cantidad*precio_venta)')->where('id_venta','=',$id_venta)
            ->get();
        $total=($subtotal[0]->sum);
        $venta=venta::find($id);
        $venta->fecha=$request->input('fecha');
        $venta -> total= $total;
        $venta -> id_pago= $request -> input('id_pago');
        $venta -> id_usuario= $request -> input('id_usuario');
        $venta -> id_cupon= $request-> input('id_cupon');
        $venta -> save();//insert
        return redirect() -> route( 'venta.index');
    }
    public function destroy($id){
        DB::table('detalle_ventas')->where('id_venta','=',$id)->delete();
        $venta=venta::find($id);
        $venta -> delete();//elimina
        return redirect() -> route( 'venta.index');
        //return back();
    }
}

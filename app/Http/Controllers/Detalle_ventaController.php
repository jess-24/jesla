<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_venta;
use App\producto;
use Illuminate\Support\Facades\DB;

class Detalle_ventaController extends Controller
{
    public function index($id){
        $detalle_ventas=detalle_venta::where('id_venta','=',$id)->get();
        return view('admin.detalle_ventas.index')-> with(compact('detalle_ventas') );
    }
    public function create($id_venta){
        $productos= producto::paginate(10);//mostrar productos de 10 en 10
        return view('admin.detalle_ventas.create')-> with(compact('productos','id_venta'));
    }
    public function store(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $detalle_venta=new detalle_venta();
        $detalle_venta -> cantidad= $request -> input('cantidadD');
        $detalle_venta -> id_producto= $request -> input('id_producto');
        $detalle_venta -> id_venta= $request -> input('id_venta');
        $detalle_venta -> save();//insert
        $subtotal=DB::table('detalle_ventas')
            ->join('productos','detalle_ventas.id_producto','=','productos.id')
            ->selectRaw('sum(detalle_ventas.cantidad*precio_venta)')->where('id_venta','=',$detalle_venta -> id_venta)
            ->get();
        $total=($subtotal[0]->sum);
        DB::table('ventas')->where('id','=',$detalle_venta -> id_venta)
            ->update(['total'=>(($total))]);
        return back()->with('successdul','Producto agregado');
    }
    public function store2(Request $request){
        //dd($request->all());  //devuelve todos los campos
        $detalle_venta=new detalle_venta();
        $detalle_venta -> cantidad= $request -> input('cantidadD');
        $detalle_venta -> id_producto= $request -> input('id_producto');
        $detalle_venta -> id_venta= $request -> input('id_venta');
        $detalle_venta -> save();//insert
        $subtotal=DB::table('detalle_ventas')
            ->join('productos','detalle_ventas.id_producto','=','productos.id')
            ->selectRaw('sum(detalle_ventas.cantidad*precio_venta)')->where('id_venta','=',($detalle_venta -> id_venta))
            ->get();
        $total=($subtotal[0]->sum);
        DB::table('ventas')->where('id','=',$detalle_venta -> id_venta)
            ->update(['total'=>(($total))]);
        return redirect() -> route( 'venta.index')-> with('success','Registro actualizado satisfactoriamente');
    }
    public function edit($id){
        $detalle_venta=detalle_venta::find($id);
        return view('admin.detalle_ventas.edit')-> with(compact('detalle_venta') );
    }
    public function update(Request $request,$id){
        $detalle_venta=detalle_venta::find($id);
        $detalle_venta -> cantidad= $request->input('cantidadD');
        $detalle_venta -> save();//insert
        $subtotal=DB::table('detalle_ventas')
            ->join('productos','detalle_ventas.id_producto','=','productos.id')
            ->selectRaw('sum(detalle_ventas.cantidad*precio_venta)')
            ->where('id_venta','=',($detalle_venta -> id_venta))
            ->get();
        $total=($subtotal[0]->sum);
        DB::table('ventas')->where('id','=',$detalle_venta -> id_venta)
            ->update(['total'=>(($total))]);
        return redirect() -> route( 'venta.index');
    }
    public function destroy($id){
        $detalle_venta=detalle_venta::find($id);
        $detalle_venta -> delete();//elimina
        return redirect() -> route( 'venta.index');
        //return back();
    }
}

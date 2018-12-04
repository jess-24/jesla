@extends('admin.layout')
@section('content')
        <title>EDITAR VENTA</title>

            <div class="content">
                <div class="title m-b-md">
                    Editar producto
                </div>
                <form method="post" action="{{ action('VentaController@update',['id'=>$venta])}}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Total</label>
                            <input type="number" step="0.01" class="form-control" name="total" value="{{$venta->total}}" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Fecha</label>
                            <input type="date" class="form-control" name="fecha" value="{{$venta->fecha}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Cantidad</label>
                            <input type="number" step="0.01" class="form-control" name="cantidad" value="{{$venta->cantidad}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Producto</label>
                            <input type="number" class="form-control" name="id_producto" value="{{$venta->id_producto}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Pago</label>
                            <input type="number" class="form-control" name="id_pago" value="{{$venta->id_pago}}" >
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Usuario</label>
                            <input type="number" class="form-control" name="id_usuario" value="{{$venta->id_usuario}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Cupon</label>
                            <input type="number" class="form-control" name="id_cupon"value="{{$venta->id_cupon}}" >
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Venta</label>
                            <input type="number" class="form-control" name="id_venta" value="{{$venta->id_venta}}" >
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Guardar</button>
                    <a href="{{ route( 'venta.index') }}" ><button>Cancelar</button></a>

                </form>
        </div>
@stop

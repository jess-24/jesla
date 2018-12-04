@extends('admin.layout')
@section('content')
        <title>EDITAR DETALLE</title>

            <div class="content">
                <div class="title m-b-md">
                    EDITAR CANTIDAD DE PRODUCTOS

                </div>
                <form method="post" action="{{ action('Detalle_ventaController@update',['id'=>$detalle_venta])}}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Producto</label>
                            <input type="text" class="form-control" name="nombre" contenteditable="false" value="{{$detalle_venta->producto->nombre}}" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Cantidad</label>
                            <input type="number" class="form-control" name="cantidadD" value="{{$detalle_venta->cantidad}}" >
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Guardar</button>
                </form>
                <a href="{{ route( 'venta.index') }}" ><button>Cancelar</button></a>
        </div>
@stop

@extends('admin.layout')
@section('content')
        <title>EDITAR PROVEEDOR</title>

            <div class="content">
                <div class="title m-b-md">
                    EDITAR PROVEEDOR
                </div>
                <form method="post" action="{{ action('ProveedorController@update',['id'=>$proveedor])}}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Nombre proveedor</label>
                            <input type="text" class="form-control" name="nombre" value="{{$proveedor->nombre}}" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Domicilio</label>
                            <input type="text" class="form-control" name="domicilio" value="{{$proveedor->domicilio}}">
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Guardar</button>
                    <a href="{{ route( 'proveedor.index') }}" ><button>Cancelar</button></a>
                </form>
        </div>
@stop

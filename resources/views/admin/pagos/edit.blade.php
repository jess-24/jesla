@extends('admin.layout')
@section('content')
        <title>EDITAR TIPO DE PAGO</title>

            <div class="content">
                <div class="title m-b-md">
                    EDITAR TIPO DE PAGO
                </div>
                <form method="post" action="{{ action('PagoController@update',['id'=>$pago])}}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Tipo de pago</label>
                            <input type="text" class="form-control" name="tipo" value="{{$pago->tipo}}" >
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Guardar</button>
                    <a href="{{ route( 'pago.index') }}" ><button>Cancelar</button></a>
                </form>
        </div>
@stop

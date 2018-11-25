@extends('admin.layout')
@section('content')
        <title>EDITAR CUPÓN</title>

            <div class="content">
                <div class="title m-b-md">
                    EDITAR CUPÓN
                </div>
                <form method="post" action="{{ action('CuponController@update',['id'=>$cupon])}}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Código</label>
                            <input type="text" class="form-control" name="codigo" value="{{$cupon->codigo}}" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Porcentaje</label>
                            <input type="number" step="1" class="form-control" name="porcentaje" value="{{$cupon->porcentaje}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Vigencia</label>
                            <input type="date" class="form-control" name="vigencia" value="{{$cupon->vigencia}}">
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Guardar</button>
                    <a href="{{ route( 'cupon.index') }}" ><button>Cancelar</button></a>
                </form>
        </div>
@stop

@extends('admin.layout')
@section('content')
        <title>REGISTRAR NUEVO CUPÓN</title>

            <div class="content">
                <div class="title m-b-md">
                    NUEVO CUPÓN
                </div>
                <form method="post" action="{{ route('cupon.store') }}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Código</label>
                            <input type="text" class="form-control" name="codigo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Porcentaje</label>
                            <input type="number" step="1" class="form-control" name="porcentaje">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Vigencia</label>
                            <input type="date" class="form-control" name="vigencia">
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Registrar</button>
                </form>
        </div>
@stop

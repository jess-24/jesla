@extends('admin.layout')
@section('content')
        <title>REGISTRAR NUEVO TIPO DE PAGO</title>

            <div class="content">
                <div class="title m-b-md">
                    NUEVO TIPO DE PAGO
                </div>
                <form method="post" action="{{ route('pago.store') }}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Tipo de pago</label>
                            <input type="text" class="form-control" name="tipo">
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Registrar</button>
                </form>
        </div>
@stop

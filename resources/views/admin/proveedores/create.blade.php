@extends('admin.layout')
@section('content')
        <title>REGISTRAR NUEVO PROOVEEDOR</title>

            <div class="content">
                <div class="title m-b-md">
                    NUEVO PROOVEEDOR
                </div>
                <form method="post" action="{{ route('proveedor.store') }}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Nombre Proveedor</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Domicilio</label>
                            <input type="text" class="form-control" name="domicilio">
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Registrar</button>
                </form>
        </div>
@stop

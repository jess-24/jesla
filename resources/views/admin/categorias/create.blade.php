@extends('admin.layout')
@section('content')
        <title>REGISTRAR NUEVA CATEGORIA</title>

            <div class="content">
                <div class="title m-b-md">
                    NUEVA CATEGORIA
                </div>
                <form method="post" action="{{ route('categoria.store') }}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Nombre Categoria</label>
                            <input type="text" class="form-control" name="categoria">
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Registrar</button>
                </form>
        </div>
@stop

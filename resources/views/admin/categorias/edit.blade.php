@extends('admin.layout')
@section('content')
        <title>EDITAR CATEGORIA</title>

            <div class="content">
                <div class="title m-b-md">
                    EDITAR CATEGORIA
                </div>
                <form method="post" action="{{ action('CategoriaController@update',['id'=>$categoria])}}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Nombre Categoria</label>
                            <input type="text" class="form-control" name="categoria" value="{{$categoria->categorias}}" >
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Guardar</button>
                    <a href="{{ route( 'categoria.index') }}" ><button>Cancelar</button></a>
                </form>
        </div>
@stop

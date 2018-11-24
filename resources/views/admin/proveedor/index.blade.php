@extends('admin.layout')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Lista De Proveedores</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('proveedor.create') }}" class="btn btn-info" >Añadir Artista</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Nombre</th>
                                <th>Domicilio</th>

                                <th>Editar</th>
                                <th>Eliminar</th>

                                </thead>
                                <tbody>
                                @if($proveedor->count())
                                    @foreach($proveedor as $p)
                                        <tr>
                                            <td>{{$p->nombre}}</td>
                                            <td>{{$p->docimilio}}</td>


                                            <td><a class="btn btn-primary btn-xs" href="{{action('ProveedorController@edit', $p->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                            <td>
                                                <form action="{{action('ProveedorController@destroy', $p->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">

                                                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                    {{ $proveedor->links() }}
                </div>
            </div>
        </section>
    </div>

@stop

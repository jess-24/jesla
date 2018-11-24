@extends('admin.layout')
@section('content')
            <div class="content">
                <div class="title m-b-md">
                    JESLA
                </div>
                <a href="{{ route('proveedor.create') }}" ><button>Nuevo Proveedor</button></a>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nombre</th>
                                <th>Domicilio</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($proveedores as $p)
                            <tr>
                                <td class="text-center">{{ $p -> id}}</td>
                                <td>{{ $p-> nombre }}</td>
                                <td>{{ $p-> domicilio }}</td>
                                <td><a href="{{ action('ProveedorController@edit',['id'=>$p->id]) }}" ><button type="button" rel="tooltip" title="Editar proveedor" class="btn btn-info">Editar</button></a>
                                    <a href="{{ action('ProveedorController@destroy',['id'=>$p->id]) }}" ><button type="button" rel="tooltip" title="Eliminar proveedor" class="btn btn-info">Eliminar</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{$proveedores ->links()}}
                </div>
            </div>
@endsection

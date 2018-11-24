@extends('admin.layout')
@section('content')
            <div class="content">
                <div class="title m-b-md">
                    JESLA
                </div>
                <a href="{{ route('categoria.create') }}" ><button>Nueva Categoria </button></a>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Categoria</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($categorias as $c)
                            <tr>
                                <td class="text-center">{{ $c -> id}}</td>
                                <td>{{ $c-> categorias }}</td>
                                <td>
                                    <a href="{{ action('CategoriaController@edit',['id'=>$c->id]) }}" ><button type="button" rel="tooltip" title="Editar categoria" class="btn btn-info">Editar</button></a>
                                    <a href="{{ action('CategoriaController@destroy',['id'=>$c->id]) }}" ><button type="button" rel="tooltip" title="Eliminar categoria" class="btn btn-info">Eliminar</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{$categorias ->links()}}
                </div>
            </div>
@endsection

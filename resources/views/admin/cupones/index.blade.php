@extends('admin.layout')
@section('content')
            <div class="content">
                <div class="title m-b-md">
                    JESLA
                </div>
                <a href="{{ route('cupon.create') }}" ><button>Nuevo Cupón</button></a>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Código</th>
                                <th>Porcenaje</th>
                                <th>Vigencia</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($cupons as $c)
                            <tr>
                                <td class="text-center">{{ $c -> id}}</td>
                                <td>{{ $c-> codigo }}</td>
                                <td>{{ $c-> porcentaje }}</td>
                                <td>{{ $c-> vigencia }}</td>
                                <td>
                                    <a href="{{ action('CuponController@edit',['id'=>$c->id]) }}" ><button type="button" rel="tooltip" title="Editar" class="btn btn-info">Editar</button></a>
                                    <a href="{{ action('CuponController@destroy',['id'=>$c->id]) }}" ><button type="button" rel="tooltip" title="Eliminar" class="btn btn-info">Eliminar</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{$cupons ->links()}}
                </div>
            </div>
@endsection

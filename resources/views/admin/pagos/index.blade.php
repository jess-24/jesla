@extends('admin.layout')
@section('content')
            <div class="content">
                <div class="title m-b-md">
                    JESLA
                </div>
                <a href="{{ route('pago.create') }}" ><button>Nueva Tipo de Pago </button></a>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Tipo de pagos</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($pagos as $p)
                            <tr>
                                <td class="text-center">{{ $p -> id}}</td>
                                <td>{{ $p-> tipo }}</td>
                                <td>
                                    <a href="{{ action('PagoController@edit',['id'=>$p->id]) }}" ><button type="button" rel="tooltip" title="Editar categoria" class="btn btn-info">Editar</button></a>
                                    <a href="{{ action('PagoController@destroy',['id'=>$p->id]) }}" ><button type="button" rel="tooltip" title="Eliminar categoria" class="btn btn-info">Eliminar</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{$pagos ->links()}}
                </div>
            </div>
@endsection

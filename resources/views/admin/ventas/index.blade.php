@extends('admin.layout')
@section('content')
            <div class="content">
                <div class="title m-b-md">
                    JESLA
                </div>
                <a href="{{ route('venta.create') }}" ><button>AGREGAR VENTA</button></a>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Venta #</th>
                                <th>Fecha</th>
                                <th>Cupon %</th>
                                <th>Total</th>
                                <th>Tipo de pago</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                    @foreach($ventas as $v)
                            <tr>
                                <td>{{$v -> usuario -> nombre}}</td>
                                <td>{{$v -> id}}</td>
                                <td>{{$v -> fecha}}</td>
                                <td>{{$v -> cupon -> porcentaje}}</td>
                                <td>{{$v -> total}}</td>
                                <td>{{$v -> pago ->tipo}}</td>
                                <td>
                                    <a href="{{ action('Detalle_ventaController@index',['id'=>$v->id]) }}" ><button type="button" rel="tooltip" title="Ver" class="btn btn-info">Ver detalle</button></a>
                                    <a href="{{ action('VentaController@destroy',['id'=>$v->id]) }}" ><button type="button" rel="tooltip" title="Eliminar" class="btn btn-info">Eliminar</button></a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                    </table>
                    {{$ventas ->links()}}
                </div>
            </div>
@endsection

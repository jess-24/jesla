@extends('admin.layout')
@section('content')
            <div class="content">
                <div class="title m-b-md">
                    JESLA
                </div>
                <label style="visibility: hidden" >{{$ida=0}}</label>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Venta</th>
                                <th class="text-center">#</th>
                                <th>Categoria</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($detalle_ventas as $dv)
                            <label style="visibility: hidden" >{{$ida=$dv->venta->id}}</label>
                            <tr>
                                <td>{{$dv->venta->id}}</td>
                                <td class="text-center">{{ $dv->producto -> id}}</td>
                                <td>{{ $dv-> producto ->categoria->categorias }}</td>
                                <td>{{ $dv-> producto ->nombre }}</td>
                                <td><td>{{ $dv-> cantidad }}</td></td>
                                <td>
                                    <a href="{{ action('Detalle_ventaController@edit',['id'=>$dv->id]) }}" ><button type="button" rel="tooltip" title="Editar" class="btn btn-info">Editar</button></a>
                                    <a href="{{ action('Detalle_ventaController@destroy',['id'=>$dv->id]) }}" ><button type="button" rel="tooltip" title="Eliminar" class="btn btn-info">Eliminar</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <form method="post" action="{{ action('Detalle_ventaController@create',['id'=>$ida])}}">
                        @csrf
                        <button class="col-sm-2" type="submit" >Agregar Otro producto</button>
                    </form>
                </div>
            </div>
@endsection

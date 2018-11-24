@extends('admin.layout')
@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <a href="{{ route('producto.create') }}" ><button>Nuevo Producto</button></a>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Producto</th>
                                <th class="text-right">Precio</th>
                                <th>Descripcion</th>
                                <th>Tamaño</th>
                                <th>Color</th>
                                <th>Disponibles</th>
                                <th>Imagen</th>
                                <th>Categoria</th>
                                <th>Proveedor</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($productos as $p)
                            <tr>
                                <td class="text-center">{{ $p -> id}}</td>
                                <td>{{ $p-> nombre }}</td>
                                <td class="text-right">{{ $p-> precio_venta }}</td>
                                <td>{{ $p-> descripcion }}</td>
                                <td>{{ $p-> tamano }}</td>
                                <td>{{ $p-> color }}</td>
                                <td>{{ $p-> cantidad }}</td>
                                <td><img src='{{asset("img/".$p-> imagen)}}' style="width: 100px; height: 100px" /></td>
                                <td>{{ $p-> id_categoria}}</td>
                                <td>{{ $p-> id_proveedor}}</td>
                                <td>
                                    <button type="button" rel="tooltip" title="Ver producto" class="btn btn-info" > Ver<i class=""></i></button>
                                    <a href="{{ route('producto.edit',['id' => $p]) }}" ><button type="button" rel="tooltip" title="Editar producto" class="btn btn-info">Editar</button></a>
                                    <button type="button" rel="tooltip" title="ELiminar producto" class="btn btn-info" >Eliminar<i class=""></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{$productos ->links()}}
                </div>
            </div>
@endsection

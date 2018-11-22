@extends('admin.layout')
@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
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
                                <th>Proveedor</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($productos as $p)
                            <tr>
                                <td class="text-center">{{ $p -> id}}</td>
                                <td>{{ $p-> nombre }}</td>
                                <td class="text-right">&mnx ;{{ $p-> precio_venta }}</td>
                                <td>{{ $p-> descripcion }}</td>
                                <td>{{ $p-> tamano }}</td>
                                <td>{{ $p-> color }}</td>
                                <td>{{ $p-> cantidad }}</td>
                                <td><img src="{{asset('$p->imagen')}}" /></td>
                                <td>{{ $p-> id_proveedor}}</td>
                                <td>
                                    <button type="button" rel="tooltip" title="Ver producto" class="btn btn-info" > Ver<i class=""></i></button>
                                    <button type="button" rel="tooltip" title="Editar producto" class="btn btn-info" >Editar<i class=""></i></button>
                                    <button type="button" rel="tooltip" title="ELiminar producto" class="btn btn-info" >Eliminar<i class=""></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
@endsection

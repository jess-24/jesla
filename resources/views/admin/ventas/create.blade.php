@extends('admin.layout')
@section('content')
    <title>REGISTRAR VENTA</title>

    <div class="content">
        <div class="title m-b-md">
            NUEVA VENTA
        </div>
        <div>

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
                        <th>Cantidad deseada</th>
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
                            <td>{{ $p-> categoria -> categorias}}</td>
                            <td>{{ $p-> proveedor -> nombre}}</td>
                            <td><form method="post" action="{{ route('detalle_venta.store') }}">
                                    @csrf
                                <input type="number" class="form-control" name="cantidadD">
                                <input type="hidden" name="id_producto" value="{{$p-> id}}">
                                <input type="hidden" name="id_venta" value="{{$id_venta}}">
                                <button class="col-sm-2" type="submit" >Agregar</button></form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            {{$productos ->links()}}
                </div>
            </div>
        <div>
        <form method="post" action="{{ route('venta.store') }}">
            @csrf
            <div class="col-sm-4">
                <div class="form-group label-floating" >
                    <label class="control-label">Fecha</label>
                    <input type="date" name="fecha" required class="form-control">
                </div>
            </div>
            <div class="col-sm-4">
                <select class="form-control" name="id_pago">
                    @foreach($pagos as $p )
                        <option value="{{$p->id}}" >{{$p->tipo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <select class="form-control" name="id_cupon">
                    @foreach($cupones as $c )
                        <option value="{{$c->id}}" >{{$c->porcentaje}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="hidden" name="id_pago" value="{{$p-> id}}">
                <input type="hidden" name="id_cupon" value="{{$id_venta}}">
                <button class="col-sm-2" type="submit" >Registrar</button></div>
        </form>
        </div>
    </div>
@stop

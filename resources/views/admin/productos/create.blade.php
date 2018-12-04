@extends('admin.layout')
@section('content')
        <title>REGISTRAR NUEVO PRODUCTO</title>

            <div class="content">
                <div class="title m-b-md">
                    Nuevo producto
                </div>
                <form method="post" action="{{ route('producto.store') }}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Nombre producto</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Precio compra</label>
                            <input type="number" step="0.01" class="form-control" name="precio_compra">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Precio venta</label>
                            <input type="number" step="0.01" class="form-control" name="precio_venta">
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Descripción" rows="5" name="descripcion"></textarea>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Tamaño (in)</label>
                            <input type="number" class="form-control" name="tamano">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Color</label>
                            <input type="text" class="form-control" name="color">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Imagen</label>
                            <input type="text" class="form-control" name="imagen">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Cantidad disponibles</label>
                            <input type="number" class="form-control" name="cantidad">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" name="id_categoria">
                            @foreach($categorias as $c )
                                <option value="{{$c->id}}" >{{$c->categorias}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" name="id_proveedor">
                            @foreach($proveedores as $p)
                                <option value="{{$p->id}}" >{{$p->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="col-sm-2" type="submit" >Registrar</button>
                </form>
        </div>
@stop

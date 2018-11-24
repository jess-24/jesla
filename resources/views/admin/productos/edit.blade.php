@extends('admin.layout')
@section('content')
        <title>REGISTRAR NUEVO PRODUCTO</title>

            <div class="content">
                <div class="title m-b-md">
                    Editar producto
                </div>
                <form method="post" action="{{ route('producto.edit',['id'=>$producto]) }}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Nombre producto</label>
                            <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Precio compra</label>
                            <input type="number" step="0.01" class="form-control" name="precio_compra" value="{{$producto->precio_compra}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Precio venta</label>
                            <input type="number" step="0.01" class="form-control" name="precio_venta" value="{{$producto->precio_venta}}">
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Descripción" rows="5" name="descripcion">{{$producto->descripcion}}</textarea>
                    <div >
                        <div class="form-group label-floating" >
                            <label class="control-label">Tamaño (in)</label>
                            <input type="number" step="0.01" class="form-control" name="tamano" value="{{$producto->tamano}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Color</label>
                            <input type="text" class="form-control" name="color" value="{{$producto->color}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Imagen</label>
                            <input type="text" class="form-control" name="imagen" value="{{$producto->imagen}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Cantidad disponibles</label>
                            <input type="number" step="0.01" class="form-control" name="cantidad" value="{{$producto->cantidad}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Categoria</label>
                            <input type="number" step="0.01" class="form-control" name="id_categoria" value="{{$producto->id_categoria}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group label-floating" >
                            <label class="control-label">Proveedor</label>
                            <input type="number" step="0.01" class="form-control" name="id_proveedor" value="{{$producto->id_proveedor}}">
                        </div>
                    </div>
                    <button class="col-sm-2" type="submit" >Guardar</button>
                    <a href="{{ route( 'producto.index') }}" ><button>Cancelar</button></a>
                    <!--$table->string(imagen,100);
                    $table->integer("id_categoria");
                    $table->integer("id_proveedor");
                    $table->foreign("id_categoria")->references("id")->on("categoria");
                    $table->foreign("id_proveedor")->references("id")->on("proveedores");-->

                </form>
        </div>
@stop

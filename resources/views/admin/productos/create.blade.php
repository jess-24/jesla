@extends('admin.layout')
@section('content')
        <title>REGISTRAR NUEVO PRODUCTO</title>

            <div class="content">
                <div class="title m-b-md">
                    Nuevo producto
                </div>
                <form method="post" >
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
                            <input type="number" class="form-control" name="precio_compra">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Precio venta</label>
                            <input type="numbre" class="form-control" name="precio_venta">
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Descripción" rows="5" name="descripcion"></textarea>
                    <div >
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
                            <label class="control-label">Cantidad disponibles</label>
                            <input type="number" class="form-control" name="cantidad">
                        </div>
                    </div>
                    <button class="" >Registrar</button>
                    <!--$table->string("imagen",100);
                    $table->integer("id_categoria");
                    $table->integer("id_proveedor");
                    $table->foreign("id_categoria")->references("id")->on("categoria");
                    $table->foreign("id_proveedor")->references("id")->on("proveedores");-->

                </form>
        </div>
@stop
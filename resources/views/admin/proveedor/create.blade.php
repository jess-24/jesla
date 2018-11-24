@extends('admin.layout')
@section('content')
        <title>REGISTRAR NUEVO PRODUCTO</title>

            <div class="content">
                <div class="title m-b-md">
                    Nuevo proveedor
                </div>
                <form method="post" action="{{route('proveedor.store')}}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Nombre proveedor</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating" >
                            <label class="control-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion">
                        </div>
                    </div>


                    <button class="" type="submit">Registrar</button>
                    <!--$table->string("imagen",100);
                    $table->integer("id_categoria");
                    $table->integer("id_proveedor");
                    $table->foreign("id_categoria")->references("id")->on("categoria");
                    $table->foreign("id_proveedor")->references("id")->on("proveedores");-->

                </form>
        </div>
@stop

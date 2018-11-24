<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre",100);
            $table->decimal("precio_compra",10,2);
            $table->decimal("precio_venta",10,2);
            $table->text("descripcion");
            $table->decimal("tamano",6,2);
            $table->string("color",100);

            $table->integer("cantidad");
            $table->string("imagen",100);
            $table->integer("id_categoria");
            $table->integer("id_proveedor");
            $table->foreign("id_categoria")->references("id")->on("categorias");
            $table->foreign("id_proveedor")->references("id")->on("proveedors");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

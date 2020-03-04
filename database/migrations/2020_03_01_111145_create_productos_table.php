<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->bigInteger('fkCategoria')->unsigned();
            $table->foreign('fkCategoria')->references('id')->on('categorias');
            $table->bigInteger('fkMarca')->unsigned();
            $table->foreign('fkMarca')->references('id')->on('marcas');
            $table->bigInteger('fkUnidad')->unsigned();
            $table->foreign('fkUnidad')->references('id')->on('unidades');
            $table->double('pVenta');
            $table->double('pCompra');
            $table->boolean('eliminar');
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

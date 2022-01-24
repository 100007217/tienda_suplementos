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
            $table->id();
            $table->integer('cantidad_producto');
            $table->string('nombre_producto',255);
            $table->decimal('precio_producto',$precision = 4, $scale = 2);
            $table->string('sabor_producto',255);
            $table->integer('valoraciones_producto');
            $table->integer('stock_producto');
            $table->string('foto_producto',255);
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

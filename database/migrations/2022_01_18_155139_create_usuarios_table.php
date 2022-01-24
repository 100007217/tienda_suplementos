<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario',255);
            $table->string('apellido_usuario',255);
            $table->foreignId('id_direccion_usuario');
            $table->foreign('id_direccion_usuario')->references('id')->on('direcciones');
            $table->date('nacimiento_usuario');
            $table->string('correo_usuario',255);
            $table->string('foto_usuario',255)->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

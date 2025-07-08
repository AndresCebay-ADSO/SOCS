<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('inventario')) {
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('idInv'); // Cambiado a increments para auto-incremento
            $table->integer('canInv')->nullable();
            $table->dateTime('ultactInv')->nullable();
            $table->integer('idProInv')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at

            // Asegura que el idProInv sea una clave foránea que referencia a la tabla productos
            $table->foreign('idProInv')->references('idPro')->on('productos')->onDelete('cascade');
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('inventario');
    }
}

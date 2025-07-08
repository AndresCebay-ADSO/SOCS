<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('pedidos')) {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('idPed'); // Cambiado a increments para auto-incremento
            $table->integer('idUsuPed')->nullable();
            $table->date('fecPed')->nullable();
            $table->decimal('prePed', 10, 2)->nullable();
            $table->string('estPed', 100)->nullable();
            $table->integer('idProPed')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at

            // Foreign key constraints
            $table->foreign('idUsuPed')->references('idUsu')->on('usuarios')->onDelete('cascade'); // Asegura que el pedido se elimine si el usuario es eliminado
            $table->foreign('idProPed')->references('idPro')->on('productos')->onDelete('cascade'); // Asegura que el producto se elimine si el producto es eliminado
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}


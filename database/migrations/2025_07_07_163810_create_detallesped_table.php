<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallespedTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('detallesped')) {
        Schema::create('detallesped', function (Blueprint $table) {
            $table->increments('idDet'); // Cambiado a increments para auto-incremento
            $table->integer('canDet')->nullable();
            $table->integer('preProDet')->nullable();
            $table->integer('idUsuPed')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at

            // Foreign key constraints
            $table->foreign('preProDet')->references('idPro')->on('productos')->onDelete('cascade');
            $table->foreign('idUsuPed')->references('idUsuPed')->on('pedidos')->onDelete('cascade');

        });
    }
}

    public function down()
    {
        Schema::dropIfExists('detallesped');
    }
}


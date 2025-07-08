<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResenasTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('reseñas')) {
        Schema::create('reseñas', function (Blueprint $table) {
            $table->increments('idRes'); // Cambiado a increments para auto-incremento
            $table->integer('idUsuRes')->nullable();
            $table->integer('CalRes')->nullable();
            $table->string('ComRes', 225)->nullable();
            $table->dateTime('FechCreRes')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at

            $table->foreign('idUsuRes')->references('idUsu')->on('usuarios')->onDelete('cascade'); // Asegura que la reseña se elimine si el usuario es eliminado
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('reseñas');
    }
}


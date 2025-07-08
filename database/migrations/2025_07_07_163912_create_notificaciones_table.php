<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('notificaciones')) {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->increments('idNot'); // Cambiado a increments para auto-incremento
            $table->integer('idUsuNot')->nullable();
            $table->string('menNot', 225)->nullable();
            $table->dateTime('fechNot')->nullable();
            $table->enum('estNot', ['Activo', 'Inactivo'])->nullable();
            $table->timestamps(); // Agrega created_at y updated_at

            // Asegura que la notificación se elimine si el usuario es eliminado
            $table->foreign('idUsuNot')->references('idUsu')->on('usuarios')->onDelete('cascade');
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
}


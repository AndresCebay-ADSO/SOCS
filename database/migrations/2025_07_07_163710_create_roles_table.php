<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('roles')) {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('idRol'); // Cambiado a increments para auto-incremento
            $table->string('tipRol', 20)->nullable();
            $table->integer('nivRol')->nullable();
            $table->string('desRol', 255)->nullable();
            $table->enum('estRol', ['Activo', 'Inactivo'])->nullable();
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}


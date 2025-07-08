<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('idCat'); // Cambiado a increments para auto-incremento
            $table->string('nomCat', 50)->nullable();
            $table->string('desCat', 225)->nullable();
            $table->enum('estCat', ['Activo', 'Inactivo'])->nullable();
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}


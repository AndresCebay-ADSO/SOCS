<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('usuarios')) {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsu'); // Cambiado a increments para auto-incremento
            $table->string('nomUsu', 100)->nullable();
            $table->string('apeUsu', 70)->nullable();
            $table->string('dirUsu', 50)->nullable();
            $table->string('telUsu', 10)->nullable();
            $table->enum('TipdocUsu', ['Cedula de Ciudadania', 'Tarjeta de Identidad'])->nullable();
            $table->string('numdocUsu', 11)->nullable();
            $table->string('emaUsu', 100)->nullable();
            $table->string('passUsu', 70)->nullable();
            $table->integer('idRolUsu')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at

            $table->foreign('idRolUsu')->references('idRol')->on('roles')->onDelete('set null'); // Asegura que el usuario se elimine si el rol es eliminado
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}


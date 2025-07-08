<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('productos')) {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idPro'); // Cambiado a increments para auto-incremento
            $table->string('nomPro', 50)->nullable();
            $table->string('marPro', 50)->nullable();
            $table->string('codPro', 125)->nullable();
            $table->string('colPro', 30)->nullable();
            $table->integer('tallPro')->nullable();
            $table->integer('canPro')->nullable();
            $table->integer('idcatPro')->unsigned(); // Cambiado a unsigned para la relación
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('login')) {
        Schema::create('login', function (Blueprint $table) {
            $table->increments('idLog'); // Cambiado a increments para auto-incremento
            $table->string('usuLog', 50)->nullable();
            $table->string('passLog', 50)->nullable();
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('login');
    }
}

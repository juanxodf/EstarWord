<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pilotos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('altura');
            $table->integer('anio_nacimiento');
            $table->string('genero');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pilotos');
    }
};
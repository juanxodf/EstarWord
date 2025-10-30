<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('planetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('periodo_rotacion');
            $table->integer('poblacion');
            $table->string('clima');
        });
    }

    public function down()
    {
        Schema::dropIfExists('planetas');
    }
};
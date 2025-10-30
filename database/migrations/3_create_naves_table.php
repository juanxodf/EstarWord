<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('naves', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('modelo');
            $table->integer('tripulacion');
            $table->integer('pasajeros');
            $table->string('clase_nave');
        });
    }

    public function down()
    {
        Schema::dropIfExists('naves');
    }
};

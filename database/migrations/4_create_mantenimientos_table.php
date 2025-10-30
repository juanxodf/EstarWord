<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nave_id')->constrained()->onDelete('cascade');
            $table->date('fecha');
            $table->text('descripcion');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mantenimientos');
    }
};
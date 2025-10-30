<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('piloto_naves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('piloto_id')->constrained()->onDelete('cascade');
            $table->foreignId('nave_id')->constrained()->onDelete('cascade');
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('piloto_naves');
    }
};
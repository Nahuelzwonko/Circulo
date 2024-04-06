<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sorteo_id');
            $table->foreign('sorteo_id')->references('id')->on('sorteos')->onDelete('cascade');
            $table->string('nombre_sorteo');
            $table->string('email');
            $table->string('nombre_apellido');
            $table->string('numero_matricula');
            $table->string('telefono');
            $table->string('dni');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participantes');
    }
};

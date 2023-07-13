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
        Schema::create('evaluacion_kinesica', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->integer('edad');
            $table->string('genero');
            $table->string('direccion');
            $table->string('telefono');
            $table->text('contacto');
            $table->text('motivo');
            $table->text('historia');
            $table->text('evaluacion');
            $table->text('examen');
            $table->text('diagnostico');
            $table->text('objetivos');
            $table->text('plan');
            $table->text('seguimiento');
            $table->text('conclusiones');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_kinesica');
    }
};
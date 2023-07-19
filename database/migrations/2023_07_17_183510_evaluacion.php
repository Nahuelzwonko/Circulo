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
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_profesional');
            $table->string('nombre_paciente');
            $table->integer('edad');
            $table->string('obra_social');
            $table->string('telefono_particular');
            $table->string('telefono_celular');
            $table->date('fecha_nacimiento');
            $table->string('dni');
            $table->string('domicilio');
            $table->string('localidad');
            $table->string('profesional_derivante');
            $table->string('mat');
            $table->string('profesion_ocupacion');
            $table->text('otros');
            $table->text('antecedentes_familiares');
            $table->text('diagnostico_ingreso');
            $table->text('plan_tratamiento');
            $table->text('objetivos_tratamiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion');
    }
};
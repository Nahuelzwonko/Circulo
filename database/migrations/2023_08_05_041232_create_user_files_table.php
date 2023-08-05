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
        Schema::create('user_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relación con la tabla de usuarios
            $table->string('nombre_apellido');
            $table->string('cv_pdf')->nullable(); // Currículum Vitae pdf
            $table->string('dni_image')->nullable(); // Imagen de DNI
            $table->string('titulo_universitario_pdf')->nullable();
            $table->string('titulo_posgrado_pdf')->nullable();
            $table->string('matricula_provincial_pdf')->nullable();
            $table->string('constancia_ingresos_brutos_pdf')->nullable();
            $table->string('constancia_cuit_pdf')->nullable();
            $table->string('certificado_inscripcion_superintendencia_salud_pdf')->nullable();
            $table->string('poliza_seguro_mala_praxis_pdf')->nullable();
            $table->string('habilitacion_consultorio_pdf')->nullable();
            $table->timestamps();

            // Definimos la clave foránea para la relación con la tabla de usuarios
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_files');
    }
};
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
        Schema::create('consultorio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default(0); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nombre_profesional')->nullable(false);
            $table->string('nombre_paciente')->nullable(false);
            $table->integer('edad')->nullable(false);
            $table->string('obra_social')->nullable(false);
            $table->string('telefono_particular')->nullable(false);
            $table->string('telefono_celular')->nullable(false);
            $table->date('fecha_nacimiento')->nullable(false);
            $table->string('dni')->nullable(false);
            $table->string('domicilio')->nullable(false);
            $table->string('localidad')->nullable(false);
            $table->string('profesional_derivante')->nullable(false);
            $table->string('mat')->nullable(false);
            $table->string('profesion_ocupacion')->nullable(false);
            $table->text('otros')->nullable(false);
            $table->text('antecedentes_familiares')->nullable(false);
            $table->text('diagnostico_ingreso')->nullable(false);
            $table->text('plan_tratamiento')->nullable(false);
            $table->text('objetivos_tratamiento')->nullable(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultorio');
    }
};
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionKinesica extends Model
{
    use HasFactory;

    protected $table = 'consultorio';

    protected $fillable = [
        'user_id',
        'nombre_profesional',
        'nombre_paciente',
        'edad',
        'obra_social',
        'telefono_particular',
        'telefono_celular',
        'fecha_nacimiento',
        'dni',
        'domicilio',
        'localidad',
        'profesional_derivante',
        'mat',
        'profesion_ocupacion',
        'otros',
        'antecedentes_familiares',
        'diagnostico_ingreso',
        'plan_tratamiento',
        'objetivos_tratamiento',
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}